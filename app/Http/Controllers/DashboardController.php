<?php

namespace App\Http\Controllers;

use App\User;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() 
    {
        dd(auth()->user());

        return view("dashboard");
    }
}