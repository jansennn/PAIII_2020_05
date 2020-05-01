<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cbt;
use App\ObjekWisata;
use App\Akomodasi;
use App\Kuliner;
use App\Budaya;
use App\Event;
use RealRashid\SweetAlert\Facades\Alert;

class CbtController extends Controller
{
	public function index(){
		$kabupaten_id = session('kabupaten_id');
		$cbts = Cbt::where('kabupaten_id', $kabupaten_id)->paginate(10);
		$objekWisatas = ObjekWisata::where('kabupaten_id', $kabupaten_id)->get()->count();
		
		return view('CBT.User.index',compact('cbts'));
	}

	public function store(Request $request){
		$cbt = new Cbt;
		$cbt->nama = $request->nama;
		$cbt->email = $request->email;
		$cbt->password = $request->password;
		$cbt->no_hp = $request->no_hp;
		$cbt->kabupaten_id = session('kabupaten_id');

		if($cbt->save()){
			Alert::success('Success', $request->nama. ' berhasil ditambahkan');
    		return redirect()->back();
		}
	}

	public function destroy($id){
    	$cbt = Cbt::findOrFail($id);
        $cbt->delete();
        Alert::success('Success', 'User Cbt berhasil dihapus');
        return redirect()->back();
    }

    public function index1(){
    	$kabupaten_id = session('kabupaten_id');
    	$objekWisatas = ObjekWisata::where('kabupaten_id', $kabupaten_id)->get()->count();
    	$akomodasis = Akomodasi::where('kabupaten_id', $kabupaten_id)->get()->count();
    	$budayas = Budaya::where('kabupaten_id', $kabupaten_id)->get()->count();
    	$kuliners = Kuliner::where('kabupaten_id', $kabupaten_id)->get()->count();
    	$events = Event::where('kabupaten_id', $kabupaten_id)->get()->count();
    	$cbts = Cbt::where('kabupaten_id', $kabupaten_id)->get()->count();

    	return view('CBT.index',compact('objekWisatas','akomodasis','budayas','kuliners','events','cbts'));
    }
}
