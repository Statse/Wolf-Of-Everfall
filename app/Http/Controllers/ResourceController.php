<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth']);
    // }

    public function index(Request $request) 
    {
        dd(request()->route()->parameters);
        return view('resource.index');
    }

    public function store()
    {

    }
}