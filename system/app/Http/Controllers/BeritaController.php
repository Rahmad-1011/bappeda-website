<?php

namespace App\Http\Controllers;
use App\Models\Berita;
use App\Models\Kategori;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class BeritaController extends Controller {
	function index(){
		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['list_berita'] = Berita::all();
		$data['list_kategori'] = Kategori::all();
		return view('Admin.Berita.index', $data);
	}

	function store(Request $request){

		$berita = new Berita;
		$berita-> user_id = request()->user()->id;
		$berita-> id_kategori = request('id_kategori');
		$berita-> tanggal = request('tanggal');
		$berita-> judul = request('judul');
		$berita-> konten = request('konten');
		$berita->handleUploadFoto();

		$berita-> save();
		return redirect ('Admin/berita')-> with ('success', 'Berita Baru Berhasil Ditambahkan');

	}

	function show(Berita $berita){

		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['berita'] = $berita;
		return view('Admin.Berita.show', $data);

	}

	function edit(Berita $berita){
		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['list_kategori'] = Kategori::all();
		$data['berita'] = $berita;
		return view('Admin.Berita.edit', $data);
	}

	function update(Berita $berita){
		$berita-> id_kategori = request('id_kategori');
		$berita-> tanggal = request('tanggal');
		$berita-> judul = request('judul');
		$berita-> konten = request('konten');
		$berita->handleUploadFoto();

		$berita-> save();
		return redirect ('Admin/berita')-> with ('success', 'Berita Berhasil Diedit');

	}

	function destroy(Berita $berita){
		$berita->handleDeleteFoto();
		$berita->delete();

		return redirect ('Admin/berita')-> with ('danger', 'Berita Berhasil Dihapus');

	}

}