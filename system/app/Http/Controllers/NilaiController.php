<?php

namespace App\Http\Controllers;
use App\Models\Nilai;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class NilaiController extends Controller {
	function index(){
		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['nilai'] = Nilai::all();
		return view('Admin.Nilai.index', $data);
	}

	function store(Request $request){

		$nilai = new Nilai;
		$nilai-> nama = request('nama');
		$nilai-> user_id = request()->user()->id;
		$nilai->handleUploadFoto();

		$nilai-> save();
		return redirect ('Admin/nilai')-> with ('success', 'Nilai Berhasil Ditambahkan');

	}

	function show(Nilai $nilai){

		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['nilai'] = $nilai;
		return view('Admin.Nilai.show', $data);

	}

	function edit(Nilai $nilai){
		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['nilai'] = $nilai;
		return view('Admin.Nilai.edit', $data);
	}

	function update(Nilai $nilai){
		$nilai-> nama = request('nama');
		$nilai->handleUploadFoto();

		$nilai-> save();
		return redirect ('Admin/nilai')-> with ('success', 'Nilai Berhasil Diedit');

	}

	function destroy(Nilai $nilai){
		$nilai->handleDeleteFoto();
		$nilai->delete();

		return redirect ('Admin/nilai')-> with ('danger', 'Nilai Berhasil Dihapus');

	}

}