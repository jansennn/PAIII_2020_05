<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Kabupaten;
use App\CategoryWisata;
use App\ObjekWisata;
class ObjekWisataController extends Controller
{
    public function index(){
    	$kabupaten_id = session('kabupaten_id');
    	$kabupaten = Kabupaten::findOrFail($kabupaten_id);
    	$categorys = CategoryWisata::all();
    	$objekWisatas = ObjekWisata::all();


    	return view('CBT.ObjekWisata.index',compact('objekWisatas','categorys','kabupaten'));
    }

    public function store(Request $request){
    	$objekWisata = new ObjekWisata;
    	$objekWisata->nama_objek_wisata = $request->nama_objek_wisata;
    	$objekWisata->lokasi = $request->lokasi;
    	$objekWisata->foto = $request->foto;
    	$objekWisata->longitude = $request->longitude;
    	$objekWisata->latitude = $request->latitude;
    	$objekWisata->category_id = $request->category_id;
    	$objekWisata->kabupaten_id = $request->kabupaten_id;
    	$objekWisata->deskripsi = $request->deskripsi;
    	$objekWisata->cbt_id = session('cbt_id');

    	if($objekWisata->save()){
    		Alert::success('Success', $request->nama_objek_wisata. ' berhasil ditambahkan');
    		return redirect()->back();
    	}
    }

    public function edit($id){
    	$objekWisata = ObjekWisata::findOrFail($id);
    	$categorys = CategoryWisata::all();
    	return view('CBT.ObjekWisata.edit',compact('objekWisata','categorys'));
    }

    public function update(Request $request,$id){
    	try {
            //select data berdasarkan id
            $objekWisata = ObjekWisata::findOrFail($id);
            //update data
            $objekWisata->update([
                'nama_objek_wisata' => $request->name,
                'lokasi' => $request->description,
                'foto' => $request->foto,
                'longitude' => $request->longitude,
                'latitude' => $request->latitude,
                'category_id' => $request->category_id,
                'kabupaten_id' => $request->kabupaten_id,
                'deskripsi' => $request->deskripsi
            ]);
            
            //redirect ke route kategori.index
            return redirect(route('ObjekWisata.index'))->with(['success' => 'Kategori: ' . $categories->name . ' Ditambahkan']);
        } catch (\Exception $e) {
            //jika gagal, redirect ke form yang sama lalu membuat flash message error
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id){
    	$objekWisata = ObjekWisata::findOrFail($id);
        $objekWisata->delete();
         Alert::success('Success', 'Objek Wisata berhasil dihapus');
        return redirect()->back();
    }
}
