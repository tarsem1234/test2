<?php

namespace App\Http\Controllers\Backend\Access\User;

use Request;
use App\Models\Access\User\User;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Access\Role\RoleRepository;
use App\Repositories\Backend\Access\User\UserRepository;
use App\Http\Requests\Backend\Access\User\ManageUserRequest;

class AdminController extends Controller
{
    protected $users;
    protected $roles;

    public function __construct(UserRepository $users, RoleRepository $roles)
    {
        $this->users = $users;
        $this->roles = $roles;
    }

    public function index(Request $request)
    {
        $adminUsers = User::whereHas('roles',
                    function($query) {
                    $query->where('name', 'Administrator');
                })
                ->with('business_profile', 'user_profile')->where('status',1)->get();

        return view('backend.access.admin_index', compact('adminUsers'));
    }

    public function create()
    {
        $admin = true;

        return view('backend.access.admin_create', compact('admin'))
                ->withRoles($this->roles->getAll());
    }

    public function store(StoreUserRequest $request)
    {
        $this->users->create(
            [
                'data' => $request->only(
                    'first_name', 'last_name', 'email', 'password', 'status',
                    'confirmed', 'confirmation_email'
                ),
                'roles' => $request->only('assignees_roles'),
        ]);

        return redirect()->route('admin.access.admin.index')->withFlashSuccess(trans('alerts.backend.users.created'));
    }

    public function deactivated(ManageUserRequest $request)
    {
        $admin = true;

        return view('backend.access.admin_deactivated', compact('admin'));
    }

    public function deleted(ManageUserRequest $request)
    {
        $admin = true;

        return view('backend.access.admin_deleted', compact('admin'));
    }
}