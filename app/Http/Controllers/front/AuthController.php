<?php

namespace App\Http\Controllers\front;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('front.auth.login');
    }
    public function registerPage()
    {
        return view('front.auth.register');
    }
    public function register(RegisterRequest $request)
    {
        $data=$request->validated();
        $requestedUser=User::where('email',$data['email'])->first();
        if($requestedUser){
            return back()->withErrors(['Invalid' => 'This email is already registered'])
            ->withInput($request->except('password'));
        }
        $user = User::create($data);
        auth()->login($user);
        return redirect()->route('home');
    }
    public function login(LoginRequest $request)
    {
        $data=$request->validated();
        if (auth()->attempt($data)) {
            return redirect()->route('home');
        }
        return back()->withErrors(['Invalid' => 'Invalid email or password'])
        ->withInput($request->except('password'));
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }
    public function profile()
    {
        $user = User::find(Auth::id());
        return view('front.profile', compact('user'));
    }
    public function changePasswordPage()
    {
        return view('front.auth.change-password');
    }
    public function changePassword(Request $request)
    {
        $user = User::find(Auth::id());
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|min:6|max:30'
        ]);
        if (!password_verify($request->old_password, $user->password)) {
            return back()->withErrors(['Invalid' => 'Invalid old password']);
        }
        $user->update([
            'password' => bcrypt($request->password)
        ]);
        return redirect()->route('profile');
    }
}
