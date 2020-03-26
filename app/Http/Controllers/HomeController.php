<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kabupaten;

class HomeController extends Controller
{
    public function index(){
    	$kabupaten = Kabupaten::all();
    	
    	return view('wisatawan.home',compact('kabupaten'));
    }
}
