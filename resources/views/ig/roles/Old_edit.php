<?php

namespace App\Http\Controllers\Ig;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(){

        $roles = Role::whereNotIn('name', ['IG'])->get();
        // $users = User::all();
        return view('ig.roles.index', compact('roles'));
        // return view('ig.roles.index', compact('roles'), compact('users'));
    }

    public function create(){
        return view('ig.roles.create');
    }


    public function store(Request $request){
        $validated =  $request->validate(['name'=>['required']]);
        Role::create($validated);
        
        return to_route('ig.roles.index')->with('status','role-created');
    }

    public function edit(Role $role){
       $permissions = Permission::all(); 
        return view('ig.roles.edit', compact('role', 'permissions'));   
    }

    public function update(Request $request, Role $role){
        $validated = $request->validate(['name'=>'required']);
        $role->update($validated);
        return to_route('ig.roles.index')->with('status', 'role-updated');
    }

    public function destroy(Role $role){
        $role->delete();
        return to_route('ig.roles.index')->with('status', 'role-deleted');

    }

    public function givePermission(Request $request, Role $role){
        if($role->hasPermissionTo($request->permission)){
            return to_route('ig.roles.edit')->with('status', 'permission-already-assigned');

        }
        $role->givePermissionTo($request->permission);
        return to_route('ig.roles.edit')->with('status', 'permission-assigned');

    }

    public function revokePermission(Role $role, Permission $permission){
        if($role->hasPermissionTo($permission)){
 
        $role->revokePermissionTo($permission);
        return to_route('ig.roles.edit')->with('status', 'permission-revoked');

    }
    return to_route('ig.roles.edit')->with('status', 'permission-does-not-exist');

}


}
