<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Budaya;
use App\Kabupaten;
use RealRashid\SweetAlert\Facades\Alert;

class BudayaController extends Controller
{
    public function index(){
    	$kabupaten_id = session('kabupaten_id');
    	$budayas = Budaya::where('kabupaten_id', $kabupaten_id)->get();
    	$kabupatens = Kabupaten::findOrFail($kabupaten_id);

    	return view('CBT.Budaya.index',compact('budayas','kabupatens'));
    }

    public function store(Request $request){
    	$budaya = new Budaya;
    	$budaya->nama_budaya = $request->nama_budaya;
    	$budaya->kabupaten_id = $request->kabupaten_id;
    	$budaya->deskripsi = $request->deskripsi;
    	$budaya->lokasi = $request->lokasi;
    	$budaya->cbt_id = session('cbt_id');
    	//file
    	$file = $request->file('foto');
        $gambar = $file->getClientOriginalName();
    	$budaya->foto = $gambar;

    	if($budaya->save()){
    		
	    	$file->move(\base_path() ."/public/images/information/Budaya", $gambar);
    		
    		Alert::success('Success', $request->nama_budaya. ' berhasil ditambahkan');
    		return redirect()->back();
    	}
    	
    }
}
