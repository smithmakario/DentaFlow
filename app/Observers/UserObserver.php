<?php

namespace App\Observers;

use App\Models\GlobalUser;
use App\Models\User;

class UserObserver
{
    protected function syncToCentral(User $user): void
    {
        $tenantId = tenant('id');
        if (! $tenantId) {
            return;
        }

        $address = $user->userProfile?->address;

        GlobalUser::updateOrCreate(
            [
                'tenant_id' => $tenantId,
                'local_user_id' => $user->id,
            ],
            [
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'username' => $user->username,
                'email' => $user->email,
                'phone_number' => $user->phone_number,
                'address' => $address,
                'user_type' => $user->user_type,
            ]
        );
    }

    public function created(User $user): void
    {
        if (! tenancy()->initialized) {
            return;
        }

        $user->load('userProfile');

        tenancy()->central(function () use ($user) {
            $this->syncToCentral($user);
        });
    }

    public function updated(User $user): void
    {
        if (! tenancy()->initialized) {
            return;
        }

        if (! $user->wasChanged(['first_name', 'last_name', 'username', 'email', 'phone_number', 'user_type'])) {
            return;
        }

        $user->load('userProfile');

        tenancy()->central(function () use ($user) {
            $this->syncToCentral($user);
        });
    }

    public function deleted(User $user): void
    {
        if (! tenancy()->initialized) {
            return;
        }

        $tenantId = tenant('id');
        if (! $tenantId) {
            return;
        }

        tenancy()->central(function () use ($user, $tenantId) {
            GlobalUser::where('tenant_id', $tenantId)
                ->where('local_user_id', $user->id)
                ->delete();
        });
    }

    public function restored(User $user): void
    {
        $this->created($user);
    }

    public function forceDeleted(User $user): void
    {
        $this->deleted($user);
    }
}
