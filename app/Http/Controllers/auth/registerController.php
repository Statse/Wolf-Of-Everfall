<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() 
    {
        return view("auth.register");
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:255',
            'username'=>'required|max:255',
            'email'=>'required|email|max:255',
            'password'=>'required|confirmed',
        ]);

        User::create([
            'name' => $request-'name',
            'email' => $request-'email',
            'username' => $request-'username',
            'password' => Hash::$request-'password',
        ]);

        auth()->attempt($request->only('email', 'password')); //User

        return redirect()->route('dashboard');
    }
}
