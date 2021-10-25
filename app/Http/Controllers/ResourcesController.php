<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ResourcesController extends Controller
{
    public function index() 
    {
        $resources = DB::table('resources')->get();

        return view('resources.index', ['resources'=>$resources]);
    }
}
