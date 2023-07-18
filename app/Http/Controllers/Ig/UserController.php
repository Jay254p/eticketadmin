<?php

namespace App\Http\Controllers\Ig;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(Request $request)
{
    $searchQuery = $request->input('search');

    $users = User::query();

    if ($searchQuery) {
        $users->where('name', 'like', '%' . $searchQuery . '%')->orWhere('email', 'like', '%' . $searchQuery . '%');
    }

    $users = $users->paginate(10);

    return view('ig.users.index', compact('users'));
}

    public function show(User $user)
    {
        $roles = Role::all();
        $permissions = Permission::all();

        return view('ig.users.role', compact('user', 'roles', 'permissions'));
    }

    public function assignRole(Request $request, User $user)
    {
        if ($user->hasRole($request->role)) {
            return back()->with('status', 'Role-exists.');
        }

        $user->assignRole($request->role);
        return back()->with('status', 'Role-assigned.');
    }

    public function removeRole(User $user, Role $role)
    {
        if ($user->hasRole($role)) {
            $user->removeRole($role);
            return back()->with('status', 'Role-removed.');
        }

        return back()->with('status', 'Role-not-exists.');
    }

    public function givePermission(Request $request, User $user)
    {
        if ($user->hasPermissionTo($request->permission)) {
            return back()->with('status', 'Permission-exists.');
        }
        $user->givePermissionTo($request->permission);
        return back()->with('status', 'Permission-added.');
    }

    public function revokePermission(User $user, Permission $permission)
    {
        if ($user->hasPermissionTo($permission)) {
            $user->revokePermissionTo($permission);
            return back()->with('status', 'Permission-revoked.');
        }
        return back()->with('status', 'Permission-does-not-exists.');
    }

    public function destroy(User $user)
    {
        if ($user->hasRole('ig')) {
            return back()->with('status', 'you-are-ig.');
        }
        $user->delete();

        return back()->with('status', 'User-deleted.');
    }
}
