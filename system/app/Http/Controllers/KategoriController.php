<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class KategoriController extends Controller {
	function index(){
		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['list_kategori'] = Kategori::all()->sortBy(['nama', 'asc']);
		return view('Admin.Kategori.index', $data);
	}

	function store(Request $request){

		$kategori = new Kategori;
		$kategori-> nama = request('nama');

		$kategori-> save();
		return redirect ('Admin/kategori')-> with ('success', 'Surat Keluar berhasil ditambahkan');

	}

	function edit(Kategori $kategori){
		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['kategori'] = $kategori;
		return view('Admin.Kategori.edit', $data);
	}

	function update(Kategori $kategori){
		$kategori-> nama = request('nama');

		$kategori-> save();
		return redirect ('Admin/kategori')-> with ('success', 'Surat Keluar berhasil diedit');

	}

	function destroy(Kategori $kategori){
		$kategori->delete();

		return redirect ('Admin/kategori')-> with ('danger', 'Data berhasil dihapus');

	}


}