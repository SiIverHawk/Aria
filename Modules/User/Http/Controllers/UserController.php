<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\View\Factory;
use Modules\User\Http\Services\UserManagement\UserManagementInterface;

class UserController extends Controller
{
    protected $UserManagementInterface;

    protected $factory;

    protected $request;

    public function __construct(UserManagementInterface $UserManagementInterface, Factory $factory, Request $request)
    {
        $this->UserManagementInterface = $UserManagementInterface;
        $this->factory = $factory;
        $this->request = $request;
    }

    public function index()
    {
        return $this->factory->make('user::users.user-management');
    }

    public function show()
    {
        return $this->UserManagementInterface->getAll();
    }
}
