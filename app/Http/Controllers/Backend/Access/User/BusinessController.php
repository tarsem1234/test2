<?php

namespace App\Http\Controllers\Backend\Access\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Access\User\ManageUserRequest;
use App\Http\Requests\Backend\Access\User\StoreUserRequest;
use App\Models\Access\User\User;
use App\Repositories\Backend\Access\Role\RoleRepository;
use App\Repositories\Backend\Access\User\UserRepository;
use Request;

class BusinessController extends Controller
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
        $businessUsers = User::whereHas('roles',
            function ($query) {
                $query->where('name', 'Business');
            })
            ->with('business_profile')->where('status', 1)->get();

        //                dd($businessUsers);
        return view('backend.access.business_index', compact('businessUsers'));
    }

    public function create()
    {
        $business = true;

        return view('backend.access.business_create', compact('business'))
            ->with('roles', $this->roles->getAll());
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

        return redirect()->route('admin.access.business.index')->withFlashSuccess(trans('alerts.backend.users.created'));
    }

    public function deactivated(ManageUserRequest $request)
    {
        $business = true;

        return view('backend.access.business_deactivated', compact('business'));
    }

    public function deleted(ManageUserRequest $request)
    {
        $business = true;

        return view('backend.access.business_deleted', compact('business'));
    }
}
