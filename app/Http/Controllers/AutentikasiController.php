<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Cbt;
use Illuminate\Support\Facades\Auth;
class AutentikasiController extends Controller
{
    public function login(){
    	return view('Autentikasi.login');
    }

    public function login_process(Request $request){  

    	$cbt = Cbt::where('email', $request->email)->where('password',$request->password)->first();
        
    	if($cbt != NULL){
            session(['kabupaten_id' => $cbt->kabupaten_id]);
            session(['nama_kabupaten' => $cbt->kabupaten->nama_kabupaten]);
            session(['cbt_id' => $cbt->id]);
            session(['nama' => $cbt->nama]);

    		Alert::success('Success',  ' success login');
    		return redirect()->action('CbtController@index');
    	}else{
    		
    		Alert::success('Success',  ' gagal login');

    		return redirect()->back();
    	}
    	
    }

    public function logout_process(Request $request){
        session_start();
        unset($_SESSION['nama_kabupaten']);
        unset($_SESSION['nama']);
        unset($_SESSION['cbt_id']);
        unset($_SESSION['nama']);
        return redirect()->action('HomeController@index');
    }
}
