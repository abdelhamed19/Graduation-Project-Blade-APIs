<?php

namespace App\Http\Controllers\front\Dashboard;

use App\Models\User;
use App\Models\Level;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Activity;

class ManageController extends Controller
{
    public function index()
    {
        $usersWithRoles = User::whereHas('roles')->with('roles')->get();
        return view('admin.index', compact('usersWithRoles'));
    }
    public function dashboardActivities($name)
    {
        $levels=Level::with('activities')->where('name',$name)->first();
        $activities=$levels->activities;
        return view('admin.core.activities', compact('activities'));
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
    public function addActivity()
    {
        $levels = Level::all();
        return view('admin.core.addActivity', compact('levels'));
    }
    public function storeActivity(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:activities,title|max:50',
            'level' => 'required|exists:levels,id',
            'description' => 'required',
            'type' => 'required|in:حركه,مشاعر,عقل,مجتمع',
        ]);
        Activity::create([
            'title' => $request->name,
             'level_id' => $request->level,
            'description' =>json_encode($request->description),
            'type' => $request->type,
            ]);
        return redirect()->route('dashboard-levels')->with('success', 'Activity Created Successfully');
    }
    public function deleteActivity(Activity $activity)
    {
        $activity->delete();
        return redirect()->back()->with('success', 'Activity Deleted Successfully');
    }
}
