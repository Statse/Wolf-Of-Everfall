<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Resource;
use App\Models\Price;
use Illuminate\Http\Request;
use DB;


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
        $resource->slot_1->prices = array();

        foreach ($resource->slot_1->ingredients as $ingredient){
            $res = Resource::where('name', $ingredient)->first();
            $price =  Price::where('item_id', $res->id)->first();
            array_push($resource->slot_1->prices, intval($resource->slot_1->amount) * intval($price->price));
        }

        // $resource->slot_2 = json_decode($resource->slot_2);
        // $resource->slot_3 = json_decode($resource->slot_3);
        // $resource->slot_4 = json_decode($resource->slot_4);
        // $resource->slot_5 = json_decode($resource->slot_5);

        return view('resource.index', ['resource'=>$resource]);
    }

    public function store()
    {

    }
}