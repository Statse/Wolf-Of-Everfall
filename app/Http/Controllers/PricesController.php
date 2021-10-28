<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Resource;
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
        // $resources = DB::table('resources')->get();
        
        $resources = Resource::all();
        

        return view('prices.index', ['resources'=>$resources]);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'item_id'=>'required',
            'price'=>'required',
            'city' => 'required',
        ]);

        DB::table('prices')->insertGetId(
            array(
                'item_id' => $request->item_id,
                'price' => $request->price,
                'city' => $request->city,
                'user_id' => auth()->id(),
                'server' => 'Kalevala',
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP'),
            )
        );

        return back();
    }
}