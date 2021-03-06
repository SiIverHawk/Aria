<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd6d935eb1ea2214b0e85f7e8452d80e4
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\User\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\User\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Modules\\User\\Database\\Seeders\\UserDatabaseSeeder' => __DIR__ . '/../..' . '/Database/Seeders/UserDatabaseSeeder.php',
        'Modules\\User\\Entities\\User' => __DIR__ . '/../..' . '/Entities/User.php',
        'Modules\\User\\Http\\Controllers\\UserController' => __DIR__ . '/../..' . '/Http/Controllers/UserController.php',
        'Modules\\User\\Http\\Repositories\\UserRepository\\EloquentUserRepository' => __DIR__ . '/../..' . '/Http/Repositories/UserRepository/EloquentUserRepository.php',
        'Modules\\User\\Http\\Repositories\\UserRepository\\UserRepositoryInterface' => __DIR__ . '/../..' . '/Http/Repositories/UserRepository/UserRepositoryInterface.php',
        'Modules\\User\\Http\\Services\\UserManagement\\UserManagement' => __DIR__ . '/../..' . '/Http/Services/UserManagement/UserManagement.php',
        'Modules\\User\\Http\\Services\\UserManagement\\UserManagementInterface' => __DIR__ . '/../..' . '/Http/Services/UserManagement/UserManagementInterface.php',
        'Modules\\User\\Providers\\RouteServiceProvider' => __DIR__ . '/../..' . '/Providers/RouteServiceProvider.php',
        'Modules\\User\\Providers\\UserManagementServiceProvider' => __DIR__ . '/../..' . '/Providers/UserManagementServiceProvider.php',
        'Modules\\User\\Providers\\UserServiceProvider' => __DIR__ . '/../..' . '/Providers/UserServiceProvider.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd6d935eb1ea2214b0e85f7e8452d80e4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd6d935eb1ea2214b0e85f7e8452d80e4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd6d935eb1ea2214b0e85f7e8452d80e4::$classMap;

        }, null, ClassLoader::class);
    }
}
