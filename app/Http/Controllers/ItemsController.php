<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index() 
    {
        return view('items.index');
    }

    public function store()
    {

    }
}