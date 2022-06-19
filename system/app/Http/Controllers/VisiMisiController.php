<?php

namespace App\Http\Controllers;
use App\Models\VisiMisi;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class VisiMisiController extends Controller {
	function index(){
		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['list_visi_misi'] = VisiMisi::all();
		return view('Admin.VisiMisi.index', $data);
	}

	function store(Request $request){

		$visimisi = new VisiMisi;
		$visimisi-> nama = request('nama');
		$visimisi-> konten = request('konten');

		$visimisi-> save();
		return redirect ('Admin/visi-misi')-> with ('success', 'Data berhasil ditambahkan');

	}

	function edit(VisiMisi $visimisi){
		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['visimisi'] = $visimisi;
		return view('Admin.VisiMisi.edit', $data);
	}

	function update(VisiMisi $visimisi){
		$visimisi-> nama = request('nama');
		$visimisi-> konten = request('konten');

		$visimisi-> save();
		return redirect ('Admin/visi-misi')-> with ('success', 'Data berhasil diedit');

	}

	function destroy(VisiMisi $visimisi){
		$visimisi->delete();

		return redirect ('Admin/visi-misi')-> with ('danger', 'Data berhasil dihapus');

	}


}