<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.dashboard');
    }
    public function create(){
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        $validate = $request->validated();

        if(Auth::attempt(['email' => $validate['email'], 'password' => $validate['password']])){
            return redirect()->route('auth.dashboard');
        }else{
            return redirect()->back()->with('status','Your Email Or password does not match...!!');
        }
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/login');
    }
}
