<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cbt;
use RealRashid\SweetAlert\Facades\Alert;

class CbtController extends Controller
{
	public function index(){
		$kabupaten_id = session('kabupaten_id');
		$cbts = Cbt::where('kabupaten_id', $kabupaten_id)->get();
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
    	return view('CBT.index');
    }
}
