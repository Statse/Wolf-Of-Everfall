<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function index() {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $authenticated = auth()->attempt($request->only('email', 'password'));

        if ($authenticated) {
            return redirect()->intended('dashboard');
        } else {
            return redirect()->intended('login');
        }
    }
}
