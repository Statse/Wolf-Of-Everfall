<?php

namespace App\Http\Controllers;

use App\User;
use DB;

use Illuminate\Http\Request;

class PricesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index() 
    {
        $resources = DB::table('resources')->get();

        return view('prices.index', ['resources'=>$resources]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'item_id'=>'required',
            'price'=>'required',
        ]);

        DB::table('prices')->insertGetId(
            array(
                'item_id' => $request->item_id,
                'price' => $request->price,
            )
            );

        return back();
    }
}