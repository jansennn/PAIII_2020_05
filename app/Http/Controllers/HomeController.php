<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kabupaten;
use App\ObjekWisata;
use App\Event;


class HomeController extends Controller
{
    public function index(){
    	$kabupatens = Kabupaten::inRandomOrder()->get();
    	$objekWisatas1 = ObjekWisata::inRandomOrder()->limit(3)->get();
    	$objekWisatas2 = ObjekWisata::inRandomOrder()->limit(3)->get();
    	$events = Event::paginate(3);
    	return view('wisatawan.home',compact('kabupatens','objekWisatas1','objekWisatas2','events'));
    }
} 
