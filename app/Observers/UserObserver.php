<?php

namespace App\Observers;

use App\Models\GlobalUser;
use App\Models\User;

class UserObserver
{
    public function created(User $user): void
    {
        if (! tenancy()->initialized) {
            return;
        }

        tenancy()->central(function () use ($user) {
            GlobalUser::updateOrCreate(
                [
                    'tenant_id' => tenant('id'),
                    'local_user_id' => $user->id,
                ],
                [
                    'first_name' => $user->first_name,
                    'last_name' => $user->last_name,
                    'username' => $user->username,
                    'email' => $user->email,
                    'phone_number' => $user->phone_number,
                    'user_type' => $user->user_type,
                ]
            );
        });
    }

    public function updated(User $user): void
    {
        if (! tenancy()->initialized) {
            return;
        }

        tenancy()->central(function () use ($user) {
            GlobalUser::updateOrCreate(
                [
                    'tenant_id' => tenant('id'),
                    'local_user_id' => $user->id,
                ],
                [
                    'first_name' => $user->first_name,
                    'last_name' => $user->last_name,
                    'username' => $user->username,
                    'email' => $user->email,
                    'phone_number' => $user->phone_number,
                    'user_type' => $user->user_type,
                ]
            );
        });
    }

    public function deleted(User $user): void
    {
        if (! tenancy()->initialized) {
            return;
        }

        tenancy()->central(function () use ($user) {
            GlobalUser::where('tenant_id', tenant('id'))
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
