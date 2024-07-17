<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // the gate checks if the user_type is an admin 
        Gate::define('accessAdminpanel', function($user) {
            return $user->user_type('admin');
        });

        // the gate checks if the user_type is a branch
        Gate::define('accessBranchpanel', function($user) {
            return $user->user_type('branch');
        });
    }
}
