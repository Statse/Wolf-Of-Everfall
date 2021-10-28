<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Resource;
use Illuminate\Http\Request;


class ResourceController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth']);
    // }

    public function index(Request $request) 
    {
        // dd(request()->route()->parameters);
        $resources = Resource::all();
        dd($resources);
        return view('resource.index');
    }

    public function store()
    {

    }
}