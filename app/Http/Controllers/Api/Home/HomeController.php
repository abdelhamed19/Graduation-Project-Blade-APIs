<?php

namespace App\Http\Controllers\Api\Home;

use App\helpers\BaseResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $levels=Auth::user()->levels()->get();
        return BaseResponse::MakeResponse($levels,true,200);
    }
    public function userData()
    {
        $user=Auth::user()->load("profile");
        return BaseResponse::MakeResponse($user,true,200);
    }
}
