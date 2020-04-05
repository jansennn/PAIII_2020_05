<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kabupaten;
use App\ObjekWisata;

class HomeController extends Controller
{
    public function index(){
    	$kabupatens = Kabupaten::inRandomOrder()->get();
    	$objekWisatas = ObjekWisata::inRandomOrder()->get();
    	return view('wisatawan.home',compact('kabupatens'));
    }
}
