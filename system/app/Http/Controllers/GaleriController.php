<?php

namespace App\Http\Controllers;
use App\Models\Galeri;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class GaleriController extends Controller {
	function index(){
		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['list_galeri'] = Galeri::all();
		return view('Admin.Kegiatan.Galeri.index', $data);
	}

	function store(Request $request){

		$galeri = new Galeri;
		$galeri-> user_id = request()->user()->id;
		$galeri-> nama = request('nama');
		$galeri->handleUploadFoto();

		$galeri-> save();
		return redirect ('Admin/galeri')-> with ('success', 'Galeri BAPPEDA Berhasil Ditambahkan');

	}

	function show(Galeri $galeri){

		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['galeri'] = $galeri;
		return view('Admin.Kegiatan.Galeri.show', $data);

	}

	function edit(Galeri $galeri){
		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['galeri'] = $galeri;
		return view('Admin.Kegiatan.Galeri.edit', $data);
	}

	function update(Galeri $galeri){
		$galeri-> nama = request('nama');
		$galeri->handleUploadFile();

		$galeri-> save();
		return redirect ('Admin/galeri')-> with ('success', 'Galeri BAPPEDA Berhasil Diedit');

	}

	function destroy(Galeri $galeri){
		$galeri->handleDeleteFoto();
		$galeri->delete();

		return redirect ('Admin/galeri')-> with ('danger', 'Galeri BAPPEDA Berhasil Dihapus');

	}

}