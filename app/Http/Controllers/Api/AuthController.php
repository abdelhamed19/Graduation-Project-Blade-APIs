<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\helpers\BaseResponse;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $validated = $request->validated();
        if(!Auth::attempt($validated)){
            return BaseResponse::MakeResponse(null,false,'Invalid credentials');
        }
        $user = User::where('email',$validated['email'])->first();
        $token = $user->createToken('authToken')->plainTextToken;
        return BaseResponse::MakeResponse(['user'=>$user,'token'=>$token],true,'Login successful');
    }
    public function logout()
    {
        Auth::user()->tokens()->delete();
        return BaseResponse::MakeResponse(null,true,'Logout successful');
    }
    public function register(RegisterRequest $request)
    {
    $validated = $request->validated();
    $user= User::create($validated);
    $token = $user->createToken('authToken')->plainTextToken;
    return BaseResponse::MakeResponse(['user'=>$user,'token'=>$token],true,'Registration successful');
    }
    public function changePassword(Request $request)
    {
        $request->validate([
            'old_password'=>'required',
            'password'=>'required|confirmed|min:8',
        ]);
        $user=Auth::user();
        if(!bcrypt($user->password) == bcrypt($request->old_password)){
            return BaseResponse::MakeResponse(null,false,'Invalid old password');
        }
        $user->password = bcrypt($request->password);
        $user->save();
        return BaseResponse::MakeResponse(null,true,'Password changed successfully');
    }
}
