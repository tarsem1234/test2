<?php

namespace App\Http\Controllers\Backend\Access\Role;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Access\Role\ManageRoleRequest;
use App\Http\Requests\Backend\Access\Role\StoreRoleRequest;
use App\Http\Requests\Backend\Access\Role\UpdateRoleRequest;
use App\Models\Access\Role\Role;
use App\Repositories\Backend\Access\Permission\PermissionRepository;
use App\Repositories\Backend\Access\Role\RoleRepository;

/**
 * Class RoleController.
 */
class RoleController extends Controller
{
    /**
     * @var RoleRepository
     */
    protected $roles;

    /**
     * @var PermissionRepository
     */
    protected $permissions;

    public function __construct(RoleRepository $roles, PermissionRepository $permissions)
    {
        $this->roles = $roles;
        $this->permissions = $permissions;
    }

    /**
     * @return mixed
     */
    public function index(ManageRoleRequest $request)
    {
        return view('backend.access.roles.index');
    }

    /**
     * @return mixed
     */
    public function create(ManageRoleRequest $request)
    {
        return view('backend.access.roles.create')
            ->with('permissions', $this->permissions->getAll())
            ->with('role_count', $this->roles->getCount());
    }

    /**
     * @return mixed
     */
    public function store(StoreRoleRequest $request)
    {
        $this->roles->create($request->only('name', 'associated-permissions', 'permissions', 'sort'));

        return redirect()->route('admin.access.role.index')->withFlashSuccess(trans('alerts.backend.roles.created'));
    }

    /**
     * @return mixed
     */
    public function edit(Role $role, ManageRoleRequest $request)
    {
        return view('backend.access.roles.edit')
            ->with('role', $role)
            ->with('role_permissions', $role->permissions->pluck('id')->all())
            ->with('permissions', $this->permissions->getAll());
    }

    /**
     * @return mixed
     */
    public function update(Role $role, UpdateRoleRequest $request)
    {
        $this->roles->update($role, $request->only('name', 'associated-permissions', 'permissions', 'sort'));

        return redirect()->route('admin.access.role.index')->withFlashSuccess(trans('alerts.backend.roles.updated'));
    }

    /**
     * @return mixed
     */
    public function destroy(Role $role, ManageRoleRequest $request)
    {
        $this->roles->delete($role);

        return redirect()->route('admin.access.role.index')->withFlashSuccess(trans('alerts.backend.roles.deleted'));
    }
}
