<?php

namespace App\Http\Controllers\Api\Score;

use App\Models\{Level,Score,Activity};
use Illuminate\Http\Request;
use App\helpers\BaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ScoreController extends Controller
{
    public function scoreActivityResult(Activity $activity, Request $request)
    {
        $user = Auth::user();
        $status = $user->levels()->where('level_id', $activity->level_id)->where('status', 'unlocked')->first();
        if ($status) {
            Score::updateOrCreate(
                ['activity_id' => $activity->id],
                [
                    'played' => $request->played,
                    'level_id' => $activity->level_id,
                ]
            );

            $levelScore = $user->scores()->where('level_id', $activity->level_id)->where('played', 1)->count();
            if ($levelScore >= 3) {
                $currentLevel = Level::find($activity->level_id);
                $nextLevel = Level::find($activity->level_id + 1);

                // Update current level score
                $user->levels()->updateExistingPivot($currentLevel->id, ['score' => $levelScore]);
                // Unlock next level
                $user->levels()->updateExistingPivot($nextLevel, ['status' => 'unlocked']);
            }
            return BaseResponse::MakeResponse(true, 'Activity played successfully', 200);
        } else {
            return BaseResponse::MakeResponse(false, 'Level is locked', 200);
        }
    }
    public function testScore(Request $request)
    {
        $user = Auth::user();
        $user->profile()->update(['isPatient' => $request->isPatient]);
        return BaseResponse::MakeResponse(true, 'Test Done successfully', 200);
    }
}
