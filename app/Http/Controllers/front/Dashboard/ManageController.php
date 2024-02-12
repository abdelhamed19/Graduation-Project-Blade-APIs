<?php

namespace App\Http\Controllers\front\Dashboard;

use App\Models\User;
use App\Models\Level;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageController extends Controller
{
    public function index()
    {
        $usersWithRoles = User::whereHas('roles')->with('roles')->get();
        return view('admin.index', compact('usersWithRoles'));
    }
    public function levels()
    {
        $levels = Level::all();
        return view('admin.core.levels', compact('levels'));
    }
    public function addNewLevel()
    {
        return view('admin.core.addLevel');
    }
    public function storeLevel(Request $request)
    {
        $request->validate([
            'level' => 'required|unique:levels,name'
        ]);
        Level::create(['name' => $request->level]);
        return redirect()->route('dashboard-levels')->with('success', 'Level Created Successfully');
    }
    public function deleteLevel(Level $level)
    {
        $level->delete();
        return redirect()->route('dashboard-levels')->with('success', 'Level Deleted Successfully');
    }
    public function profile()
    {
        return view('admin.profile');
    }
}
