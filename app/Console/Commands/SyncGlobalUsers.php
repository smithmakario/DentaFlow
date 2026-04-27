<?php

namespace App\Console\Commands;

use App\Models\GlobalUser;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Console\Command;

class SyncGlobalUsers extends Command
{
    protected $signature = 'app:sync-global-users';

    protected $description = 'Backfill all existing tenant users into the central global_users table';

    public function handle()
    {
        $tenants = Tenant::all();

        if ($tenants->isEmpty()) {
            $this->warn('No tenants found.');
            return self::SUCCESS;
        }

        $bar = $this->output->createProgressBar($tenants->count());
        $bar->start();

        foreach ($tenants as $tenant) {
            $tenant->run(function () use ($tenant) {
                User::whereIn('user_type', ['patient', 'clinician'])->chunk(100, function ($users) use ($tenant) {
                    tenancy()->central(function () use ($users, $tenant) {
                        foreach ($users as $user) {
                            GlobalUser::updateOrCreate(
                                [
                                    'tenant_id' => $tenant->id,
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
                        }
                    });
                });
            });

            $bar->advance();
        }

        $bar->finish();
        $this->newLine();
        $this->info('Global users synced successfully.');

        return self::SUCCESS;
    }
}
