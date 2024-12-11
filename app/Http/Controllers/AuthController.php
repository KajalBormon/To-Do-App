<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('admin.signup');
    }
    public function login(){
        return view('admin.login');
    }

    public function signUp(AuthRequest $authRequest){
        $validate = $authRequest->validated();
        User::create($validate);
        return redirect()->back()->with('status', 'User created successfully');
    }

    public function loginCheck(LoginRequest $loginRequest){
        $validate = $loginRequest->validated();

        if(Auth::attempt(['email' => $validate['email'], 'password' => $validate['password']])){
            return redirect()->route('dashboard');
        }else{
            return redirect()->back()->with('status','Your Email Or password does not match...!!');
        }
    }
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
