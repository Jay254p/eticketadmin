<?php

namespace App\Http\Controllers\Ig;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::whereNotIn('name', ['IG'])->get();
        return view('ig.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('ig.roles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate(['name' => ['required']]);
        Role::create($validated);

        return to_route('ig.roles.index')->with('status', 'Role-Created-Successfully.');
    }

    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('ig.roles.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, Role $role)
    {
        $validated = $request->validate(['name' => ['required']]);
        $role->update($validated);

        return to_route('ig.roles.index')->with('status', 'Role-Updated-Successfully.');
    }

    public function destroy(Role $role)
    {
        $role->delete();

        return back()->with('status', 'Role-Deleted.');
    }

    public function givePermission(Request $request, Role $role)
    {
        if($role->hasPermissionTo($request->permission)){
            return back()->with('status', 'Permission-Already-Assigned.');
        }
        $role->givePermissionTo($request->permission);
        return back()->with('status', 'Permission-Added.');
    }

    public function revokePermission(Role $role, Permission $permission)
    {
        if($role->hasPermissionTo($permission)){
            $role->revokePermissionTo($permission);
            return back()->with('status', 'Permission-Revoked.');
        }
        return back()->with('status', 'Permission-Does-Not-exist.');
    }
}


