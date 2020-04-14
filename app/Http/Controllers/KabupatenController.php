<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kabupaten;
use App\ObjekWisata;
use App\Kuliner;
use App\Akomodasi;
use App\Budaya;
class KabupatenController extends Controller
{
    public function index($id){
    	$kabupaten = Kabupaten::find($id);
    	$objekWisatas = ObjekWisata::where('kabupaten_id', $id)->paginate(6);
    	$kuliners = Kuliner::where('kabupaten_id', $id)->paginate(6);
    	$akomodasis = Akomodasi::where('kabupaten_id', $id)->paginate(6);
    	$budayas = Budaya::where('kabupaten_id', $id)->paginate(6);
    	return view('wisatawan.kabupaten.kabupaten',compact('kabupaten','objekWisatas','kuliners','akomodasis','budayas'));
    }
}
