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
        $validatedData = $request->validated();

        if(Auth::attempt($validatedData)){
            return redirect()->route('auth.dashboard');
        }else{
            return back()->with('error', 'Invalid credentials');
        }
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/login');
    }
}
