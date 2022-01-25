<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ThingsTable;
use App\Models\Thing;
use App\Models\Inuse;
use App\Models\Place;

class MainController extends Controller
{
    public function things(){
        $things = Thing::get();
        return ($things);
    }
    public function thing($thing){
        $thingObject = Thing::where('id', $thing)->first();
        return ($thingObject);
    }
    
    


    public function places(){
        $places = Place::get();
        return ($places);
    }
    public function place($place){
        $placeObject = Place::where('id', $place)->first();
        return ($placeObject);
    }



    public function inuses(){
        $things = Inuse::get();
        return ($things);
    }
    public function inuse($inuse){
        $inuseObject = Inuse::where('id', $inuse)->first();
        return ($inuseObject);
    }
}
