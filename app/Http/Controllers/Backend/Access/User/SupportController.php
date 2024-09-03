<?php

namespace App\Http\Controllers\Backend\Access\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Access\User\ManageUserRequest;
use App\Models\Access\User\User;
use App\Repositories\Backend\Access\Role\RoleRepository;
use App\Repositories\Backend\Access\User\UserRepository;
use Request;

class SupportController extends Controller
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
        $supportUsers = User::whereHas('roles',
            function ($query) {
                $query->where('role_id', config('constant.inverse_user_type.Support'));
            })->where('status', 1)->get();

        return view('backend.access.support_index', compact('supportUsers'));
    }

    public function create()
    {
        $support = true;

        return view('backend.access.support_create', compact('support'))
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

        return redirect()->route('admin.access.support.index')->withFlashSuccess(trans('alerts.backend.users.created'));
    }

    public function deactivated(ManageUserRequest $request)
    {
        $support = true;

        return view('backend.access.support_deactivated', compact('support'));
    }

    public function deleted(ManageUserRequest $request)
    {
        $support = true;

        return view('backend.access.support_deleted', compact('support'));
    }
}
