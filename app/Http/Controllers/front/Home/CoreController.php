<?php

namespace App\Http\Controllers\front\Home;

use App\Http\Controllers\Controller;
use App\Models\{Level, Task};
use Carbon\Carbon;
use Illuminate\Http\Request;

class CoreController extends Controller
{
    public function levels()
    {
        $levels=Level::all();
        $score=Auth()->user()->levels->pluck('pivot');
        return view('front.profile-pages.levels',compact('levels','score'));
    }
    public function levelActivities($name)
    {
        $levels=Level::with('activities')->where('name',$name)->first();
        $activities=$levels->activities;
        return view('front.profile-pages.activities',compact('activities'));
    }
    public function listView()
    {
        $list=Task::whereDay("created_at",Carbon::today())->pluck('body')->last();
        if(!$list){
            $tasks=["","","",""];
            return view('front.profile-pages.list',compact('tasks'));
        }
        $tasks=json_decode($list);
        return view('front.profile-pages.list',compact('tasks'));
    }
    public function storeList(Request $request)
    {
        $request->validate([
            'body'=>'string|max:255'
        ]);
        $arr=[$request->todolist1,$request->todolist2,$request->todolist3,$request->todolist4];
        Task::updateOrCreate([
            "created_at"=>Carbon::today()
        ],[
            "body"=>json_encode($arr,true)]);
        return back()->with('success','تم حفظ القائمة بنجاح');
    }
}
