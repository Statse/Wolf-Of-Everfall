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

        $resource->slot_1 = json_decode($resource->slot_1);
        $resource->slot_2 = json_decode($resource->slot_2);
        $resource->slot_3 = json_decode($resource->slot_3);
        $resource->slot_4 = json_decode($resource->slot_4);
        $resource->slot_5 = json_decode($resource->slot_5);

        return view('resource.index', ['resource'=>$resource]);
    }

    public function store()
    {

    }
}