<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Modules\\User\\Database\\Seeders\\UserDatabaseSeeder' => $baseDir . '/Database/Seeders/UserDatabaseSeeder.php',
    'Modules\\User\\Entities\\User' => $baseDir . '/Entities/User.php',
    'Modules\\User\\Http\\Controllers\\UserController' => $baseDir . '/Http/Controllers/UserController.php',
    'Modules\\User\\Http\\Repositories\\UserRepository\\EloquentUserRepository' => $baseDir . '/Http/Repositories/UserRepository/EloquentUserRepository.php',
    'Modules\\User\\Http\\Repositories\\UserRepository\\UserRepositoryInterface' => $baseDir . '/Http/Repositories/UserRepository/UserRepositoryInterface.php',
    'Modules\\User\\Http\\Services\\UserManagement\\UserManagement' => $baseDir . '/Http/Services/UserManagement/UserManagement.php',
    'Modules\\User\\Http\\Services\\UserManagement\\UserManagementInterface' => $baseDir . '/Http/Services/UserManagement/UserManagementInterface.php',
    'Modules\\User\\Providers\\RouteServiceProvider' => $baseDir . '/Providers/RouteServiceProvider.php',
    'Modules\\User\\Providers\\UserManagementServiceProvider' => $baseDir . '/Providers/UserManagementServiceProvider.php',
    'Modules\\User\\Providers\\UserServiceProvider' => $baseDir . '/Providers/UserServiceProvider.php',
);
