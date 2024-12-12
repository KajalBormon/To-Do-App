<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{

    public function create(){
        return view('auth.register');
    }

    public function store(AuthRequest $request)
    {
        $validatedData = $request->validated();
        User::create($validatedData);
        return redirect()->back()->with('status', 'User created successfully');
    }
}
