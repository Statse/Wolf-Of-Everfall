<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Resource;
use App\Models\Price;
use Illuminate\Http\Request;
use DB;


class ResourceController extends Controller
{
    public function index(Request $request) 
    {
        $resource = Resource::where('id', request()->route()->parameters["id"])->first();

        $slots = array(
            json_decode($resource->slot_1),
            json_decode($resource->slot_2),
            json_decode($resource->slot_3),
            json_decode($resource->slot_4),
            json_decode($resource->slot_5),
        );

        for ($x = 0; $x < 5; $x++) {
            if ($slots[$x] === null){
                break;
            }

            $slots[$x]->prices = array();

            foreach ($slots[$x]->ingredients as $ingredient){
                $res = Resource::where('name', $ingredient)->first();
                $price = null;
                
                if ($res !== null){
                    $price =  Price::where('item_id', $res->id)->first();
                }

                if ($price !== null) {
                    array_push($slots[$x]->prices, intval($slots[$x]->amount) * intval($price->price));
                } else {
                    array_push($slots[$x]->prices, "No price :(");
                }
            }
        }

        


        return view('resource.index', ['resource'=>$resource, 'slots'=>$slots]);
    }

    public function store()
    {

    }
}