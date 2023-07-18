<?php

namespace App\Http\Controllers\Ig;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    //
    public function index(){

        $permissions = Permission::all();
        return view('ig.permissions.index', compact('permissions'));
    }

    public function create(){
        return view('ig.permissions.create');
    }

    public function store(Request $request){
        $validated =  $request->validate(['name'=>['required']]);
        Permission::create($validated);
        
        return to_route('ig.permissions.index')->with('status', 'permission-created');
    }

    public function edit(Permission $permission){
        return view('ig.permissions.edit', compact('permission'));
}

    public function update(Request $request, Permission $permission){
        $validated = $request->validate(['name'=>'required']);
        $permission->update($validated);
        return to_route('ig.permissions.index')->with('status', 'permission-updated');
    }

    public function destroy(Permission $permission){
        $permission->delete();
        return to_route('ig.permissions.index')->with('status', 'permission-deleted');

    }
}
