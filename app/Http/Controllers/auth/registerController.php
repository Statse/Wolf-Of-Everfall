<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class registerController extends Controller
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

        $name = $request->get('name');
        $userName = $request->get('username');
        $email = $request->get('email');
        $password = $request->get('password');
    }
}
