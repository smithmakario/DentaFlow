<?php

namespace App\Console\Commands;

use App\Models\Tenant;
use Illuminate\Console\Command;

class CreateTenant extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-tenant {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create tenant with domain name';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $name = $this->argument('name');

        $tenant = Tenant::create(['id' => $name]);

        $tenant->domains()->create(['domain' => "$name.localhost"]);

        $this->info("Created tenant $name with domain $name.localhost");
    }
}
