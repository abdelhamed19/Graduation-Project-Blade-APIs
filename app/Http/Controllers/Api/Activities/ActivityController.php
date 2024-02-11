<?php

namespace App\Http\Controllers\Api\Activities;

use App\Models\Score;
use App\Models\Activity;
use App\helpers\BaseResponse;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Http\Resources\ActivityResource;

class ActivityController extends Controller
{
    public $activity;
    public function __construct()
    {
        $this->activity = App::make('activity');
    }
    public function index()
    {
        return BaseResponse::MakeResponse(ActivityResource::collection(Activity::all()), 'Activities retrieved successfully', 200);
    }
    public function show(Activity $activity)
    {
        return BaseResponse::MakeResponse($activity, 'Activity retrieved successfully', 200);
    }
    public function getCompletedActivities()
    {
        $completedActivities=Score::whereIn('activity_id',$this->activity)->count();
        return BaseResponse::MakeResponse($completedActivities, 'Completed Activities retrieved successfully', 200);
    }
    public function getInCompletedActivities()
    {
        $completedActivityIds = Score::whereIn('activity_id', $this->activity)->pluck('activity_id')->toArray();
        $inCompletedActivities = $this->activity->count() - count($completedActivityIds);
        return BaseResponse::MakeResponse($inCompletedActivities, 'Incomplete activities count retrieved successfully', 200);
    }
    public function getCompletedType($type)
    {
        $completedActivities=Score::join(
            'activities',
            'activities.id',
            '=',
            'scores.activity_id'
        )
            ->whereIn('activity_id', $this->activity)
            ->where('activities.type', $type)
            ->count();
        return BaseResponse::MakeResponse($completedActivities, 'Completed Activities retrieved successfully', 200);
    }
}
