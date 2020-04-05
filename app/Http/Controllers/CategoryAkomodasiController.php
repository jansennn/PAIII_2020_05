<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryAkomodasi;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryAkomodasiController extends Controller
{
    public function index(){
    	$categoryAkomodasis = CategoryAkomodasi::orderBy('created_at')->paginate(10);
    	return view('CBT.CategoryAkomodasi.index', compact('categoryAkomodasis'));
    }

    public function store(Request $request){
    	$categoryAkomodasi = new CategoryAkomodasi;
    	$categoryAkomodasi->nama = $request->nama;
    	$categoryAkomodasi->deskripsi = $request->deskripsi;
    	if($categoryAkomodasi->save()){
    		Alert::success('Success', $request->nama. ' berhasil ditambahkan');

            return redirect()->back()->with(['success' => 'Category Akomodasi : ' . $categoryAkomodasi->nama . ' Ditambahkan']);
    	}
    }
}
