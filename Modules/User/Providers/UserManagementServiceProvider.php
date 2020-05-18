<?php

namespace Modules\User\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\User\Entities\User;
use Modules\User\Http\Repositories\UserRepository\EloquentUserRepository;
use Modules\User\Http\Repositories\UserRepository\UserRepositoryInterface;
use Modules\User\Http\Services\UserManagement\UserManagement;
use Modules\User\Http\Services\UserManagement\UserManagementInterface;

class UserManagementServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerUserInterface();
        $this->registerUserManagementInterface();
    }

    protected function registerUserInterface()
    {
        $this->app->bind(UserRepositoryInterface::class, function () {
            $user = new EloquentUserRepository(new User());

            return $user;
        });
    }

    protected function registerUserManagementInterface()
    {
        $this->app->bind(UserManagementInterface::class, function () {
            return new UserManagement(
                $this->app->make(UserRepositoryInterface::class)
            );
        });
    }
}
