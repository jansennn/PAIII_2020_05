<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Cbt;
class AutentikasiController extends Controller
{
    public function login(){
    	return view('Autentikasi.login');
    }

    public function login_process(Request $request){
        session_start();
        var_dump($request->email);
        die();
    	$cbt = Cbt::where('email', $request->email)->where('password',$request->password)->first();

    	if($cbt != NULL){
    		$_SESSION['nama_kabupaten'] = $cbt->kabupaten->nama_kabupaten;
    		$_SESSION['nama'] = $cbt->nama;
    		Alert::success('Success',  ' success login');
    		return view('CBT.index',compact('cbt'));
    	}else{
    		
    		Alert::success('Success',  ' gagal login');

    		return redirect()->back();
    	}
    	
    }

    public function logout_process(Request $request){
        $_SESSION['nama_kabupaten'] = null;
        $_SESSION['nama'] = null;
        return redirect()->action('HomeController@index');
    }
}
