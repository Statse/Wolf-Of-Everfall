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

        $name = $request->get('name');
        $userName = $request->get('username');
        $email = $request->get('email');
        $password = $request->get('password');

        
        dd($email);
        //validate
        //store
        //sign in
        //redirect
    }
}
