<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index() 
    {
        return view("auth.register");
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email'=>'required|email|max:255',
            'password'=>'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        $authenticated = auth()->attempt($request->only('email', 'password'));

        if ($authenticated) {
            return redirect()->intended('dashboard');
        } else {
            return redirect()->intended('login');
        }
    }
}
