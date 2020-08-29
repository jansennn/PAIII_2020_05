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
    	$event = Event::where('nama_event', $request->input)->first();
        $eventCount = Event::where('nama_event', $request->input)->get();
    	$akomodasi = Akomodasi::where('nama_akomodasi', $request->input)->first();
        $akomodasiCount = Akomodasi::where('nama_akomodasi', $request->input)->get();
    	$kuliner = Kuliner::where('nama_kuliner', $request->input)->first();
        $kulinerCount = Kuliner::where('nama_kuliner', $request->input)->get();



        if(count($akomodasiCount) != 0){
            return view('wisatawan.Search.Akomodasi', compact('akomodasi'));
        }
    	if(count($objekWisataCount) != 0){
    		return view('wisatawan.Search.ObjekWisata', compact('objekWisata'));
    	}
    	if(count($eventCount) != 0){
    		return view('wisatawan.Search.Event', compact('event'));
    	}
    	
    	if(count($kulinerCount) != 0){
    		return view('wisatawan.Search.Kuliner', compact('kuliner'));
    	}
    }
}
