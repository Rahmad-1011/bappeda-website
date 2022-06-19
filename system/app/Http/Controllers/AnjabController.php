<?php

namespace App\Http\Controllers;
use App\Models\Anjab;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AnjabController extends Controller {
	function index(){
		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['list_anjab'] = Anjab::all();
		return view('Admin.Anjab.index', $data);
	}

	function store(Request $request){

		$anjab = new Anjab;
		$anjab-> user_id = request()->user()->id;
		$anjab-> nama = request('nama');
		$anjab->handleUploadFile();

		$anjab-> save();
		return redirect ('Admin/anjab')-> with ('success', 'ANJAB Berhasil Ditambahkan');

	}

	function show(Anjab $anjab){

		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['anjab'] = $anjab;
		return view('Admin.Anjab.show', $data);

	}

	function edit(Anjab $anjab){
		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['anjab'] = $anjab;
		return view('Admin.Anjab.edit', $data);
	}

	function update(Anjab $anjab){
		$anjab-> nama = request('nama');
		$anjab->handleUploadFile();

		$anjab-> save();
		return redirect ('Admin/anjab')-> with ('success', 'ANJAB Berhasil Diedit');

	}

	function destroy(Anjab $anjab){
		$anjab->handleDeleteFile();
		$anjab->delete();

		return redirect ('Admin/anjab')-> with ('danger', 'ANJAB Berhasil Dihapus');

	}

}