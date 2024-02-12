<?php

namespace App\Http\Controllers\front\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class RolesController extends Controller
{
    public function roles(Request $request)
    {
        $roles = Role::all()->pluck('name');
        return view('admin.roles', compact('roles'));
    }
    public function createRole()
    {
        return view('admin.addRole');
    }
    public function storeRole(Request $request)
    {
        $request->validate([
            'role' => 'required|unique:roles,name'
        ]);
        Role::create(['name' => $request->role]);
        return redirect()->route('roles')->with('success', 'Role Created Successfully');
    }
    public function deleteRole(Request $request, $name)
    {
        $role = Role::where('name', $name)->first();
        $role->delete();
        return redirect()->route('roles')->with('success', 'Role Deleted Successfully');
    }
    public function assignRolePage(Request $request)
    {
        $roles = Role::all();
        return view('admin.assignRole', compact('roles'));
    }
    public function assignRole(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'role' => 'required'
        ]);
        $user = User::where('email', $request->email)->first();
        $user->assignRole($request->role);
        return redirect()->route('dashboard')->with('success', 'Role Assigned Successfully');
    }
    public function removeRole(Request $request,$id)
    {
        $user = User::where("id", $id)->first();
        if($user->hasRole('super-admin')) {
            return redirect()->route('dashboard')->with('error', 'You cannot remove super-admin role');
        }
        $user->roles()->detach();
        return redirect()->route('dashboard')->with('success', 'Role Removed Successfully');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('home')->with('success', 'User Deleted Successfully');
    }
}
