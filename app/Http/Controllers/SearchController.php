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
    	$objekWisata = ObjekWisata::where('nama_objek_wisata', $request->input)->first();
    	$objekWisataCount = ObjekWisata::where('nama_objek_wisata', $request->input)->get();
    	$event = Event::where('nama_event', $request->input)->get();
    	$akomodasi = Akomodasi::where('nama_akomodasi', $request->input)->get();
    	$kuliner = Kuliner::where('nama_kuliner', $request->input)->get();


    	if(count($objekWisataCount)){
    		return view('wisatawan.ObjekWisata.index', compact('objekWisata'));
    	}
    	if(count($event)){
    		return view('wisatawan');
    	}
    	if(count($akomodasi)){
    		return view('wisatawan.Akomodasi.index', compact('akomodasi'));
    	}
    	if(count($kuliner)){
    		return view('wisatawan.Kuliner.index', compact('kuliner'));
    	}
    }
}
