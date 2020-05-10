<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ObjekWisata;
use App\Event;
use App\Akomodasi;
use App\Kuliner;

class SearchController extends Controller
{
    public function search(Request $request){
    	var_dump($request->type);
    	die();
    }
}
