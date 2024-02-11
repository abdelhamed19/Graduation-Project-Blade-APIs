<?php

namespace App\Http\Controllers\Api\Levels;

use App\Models\Level;
use App\helpers\BaseResponse;
use App\Http\Controllers\Controller;

class LevelController extends Controller
{
    public function index()
    {
        return BaseResponse::MakeResponse(Level::all(), 'Levels retrieved successfully', 200);
    }
    public function show(Level $level)
    {
        return BaseResponse::MakeResponse($level->activities, 'Level retrieved successfully', 200);
    }
}
