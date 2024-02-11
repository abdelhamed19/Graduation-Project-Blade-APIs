<?php
namespace App\helpers;

Class BaseResponse
{
    public static function MakeResponse($data=null, $message,$status)
    {
        return response()->json([
        'data'=>$data,
        'message'=>$message,
        'success'=>$status,
        ]
        );
    }
}
