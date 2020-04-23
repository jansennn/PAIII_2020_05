<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ObjekWisata;
use App\Akomodasi;
use App\Kuliner;

class MapController extends Controller
{
    public function displayMap(){
    	$objekWisatas = ObjekWisata::all();
    	$akomodasis = Akomodasi::all();
    	$kuliners = Kuliner::all();

    	return view('wisatawan.Map.index',compact('objekWisatas','akomodasis','kuliners'));
    }
}
