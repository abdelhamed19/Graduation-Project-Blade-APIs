<?php

namespace App\Http\Controllers\Api\Tasks;

use App\Models\Task;
use Illuminate\Http\Request;
use App\helpers\BaseResponse;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function index()
    {
        return BaseResponse::MakeResponse(Task::latest()->get(), 'Tasks retrieved successfully', 200);
    }
    public function show($created_at)
    {
        $task = Task::whereDate('created_at', $created_at)->get();
        if(!$task){
            return BaseResponse::MakeResponse(null, 'Task not found', 404);
        }
        return BaseResponse::MakeResponse($task, 'Task retrieved successfully', 200);
    }
    public function store(Request $request)
    {
        $task = Task::create([
            'body' => json_decode($request->body),
        ]);
        return BaseResponse::MakeResponse($task, 'Task created successfully', 201);
    }
    public function update(Task $task, Request $request)
    {
        if(!$task){
            return BaseResponse::MakeResponse(null, 'Task not found', 404);
        }
        $task->update([
            'body' => json_decode($request->body),
        ]);
        return BaseResponse::MakeResponse($task, 'Task updated successfully', 200);
    }
    public function destroy(Task $task)
    {
        if(!$task){
            return BaseResponse::MakeResponse(null, 'Task not found', 404);
        }
        $task->delete();
        return BaseResponse::MakeResponse(null, 'Task deleted successfully', 204);
    }
}
