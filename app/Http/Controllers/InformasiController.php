<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ObjekWisata;
use App\Akomodasi;
use App\Budaya;
use App\Kuliner;

class InformasiController extends Controller
{
    public function displayObjekWisata(){
    	$objekWisatas = ObjekWisata::inRandomOrder()->get();
    	return view('wisatawan.Informasi.ObjekWisata.index', compact('objekWisatas'));
    }

    public function displayAkomodasi(){
    	$akomodasis = Akomodasi::inRandomOrder()->get();
    	return view('wisatawan.Informasi.Akomodasi.index', compact('akomodasis'));
    }

    public function displayBudaya(){
    	$budayas = Budaya::inRandomOrder()->get();
    	return view('wisatawan.Informasi.Budaya.index', compact('budayas'));
    }

    public function displayKuliner(){
    	$kuliners = Kuliner::inRandomOrder()->get();
    	return view('wisatawan.Informasi.Kuliner.index', compact('kuliners'));
    }
}
