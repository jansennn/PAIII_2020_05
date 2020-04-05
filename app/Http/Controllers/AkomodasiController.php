<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kabupaten;
use App\Akomodasi;
use App\CategoryAkomodasi;
use RealRashid\SweetAlert\Facades\Alert;

class AkomodasiController extends Controller
{
    public function index(){
    	$kabupaten_id = session('kabupaten_id');
    	$kabupaten = Kabupaten::findOrFail($kabupaten_id);
    	$akomodasis = Akomodasi::all();
    	$categoryAkomodasis = CategoryAkomodasi::all();



    	return view('CBT.Akomodasi.index',compact('akomodasis','kabupaten','categoryAkomodasis'));
    }

    public function store(Request $request){
    	$akomodasi = new Akomodasi;
    	$akomodasi->nama_akomodasi = $request->nama_akomodasi;
    	$akomodasi->longitude = $request->longitude;
    	$akomodasi->latitude = $request->latitude;
    	$akomodasi->cbt_id = $request->cbt_id;
    	$akomodasi->kabupaten_id = $request->kabupaten_id;
    	$akomodasi->category_akomodasi_id = $request->category_akomodasi_id;
    	$akomodasi->lokasi = $request->lokasi;
    	$akomodasi->deskripsi = $request->deskripsi;
    	$akomodasi->cbt_id = session('cbt_id');
        $file = $request->file('foto');
        $gambar = $file->getClientOriginalName();
    	$akomodasi->foto = $gambar;

    	if($akomodasi->save()){
    		
	    	$file->move(\base_path() ."/public/images/information/Akomodasi", $gambar);
    		
    		Alert::success('Success', $request->nama_akomodasi. ' berhasil ditambahkan');
    		return redirect()->back();
    	}
    }	

    public function edit($id){

    }

    // public function update(Request request, $id){

    // }

    public function destroy($id){

    }
}
