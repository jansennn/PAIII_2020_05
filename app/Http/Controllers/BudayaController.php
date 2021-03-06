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
    	$budayas = Budaya::where('kabupaten_id', $kabupaten_id)->paginate(10);
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
    		
	    	$file->move(\base_path() ."/public/Kab/information/Budaya", $gambar);
    		
    		Alert::success('Success', $request->nama_budaya. ' berhasil ditambahkan');
    		return redirect()->back();
    	}
    	
    }

    public function edit($id){
        $budaya = Budaya::findOrFail($id);
        return view('CBT.Budaya.edit',compact('budaya'));
    }

    public function update(Request $request, $id){
        try {
            //select data berdasarkan id
            $budaya = Budaya::findOrFail($id);
            //update data

            $budaya->nama_budaya = $request->nama_budaya;
            $budaya->lokasi = $request->lokasi;
            $budaya->deskripsi = $request->deskripsi;
            $budaya->save();
            
            //redirect ke route Budaya.index
            Alert::success('Success', $request->nama_budaya. ' berhasil diedit');

            return redirect(route('Budaya.index'))->with(['success' => 'Budaya: ' . $request->nama_budaya . ' Diedit']);
        } catch (\Exception $e) {
            //jika gagal, redirect ke form yang sama lalu membuat flash message error
            return redirect()->back();
        }
    }

    public function destroy($id){
        $budaya = Budaya::findOrFail($id);
        $budaya->delete();
        Alert::success('Success', 'Budaya berhasil dihapus');
        return redirect()->back();
    }

    public function displayBudaya($id){
        $budaya = Budaya::findOrFail($id);
        return view('wisatawan.Budaya.index',compact('budaya'));
    }
}
