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
        $resource = Resource::where('id', request()->route()->parameters["id"])->first();
        return view('resource.index', ['resource'=>$resource]);
    }

    public function store()
    {

    }
}