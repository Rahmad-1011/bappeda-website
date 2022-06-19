<?php

namespace App\Http\Controllers;
use App\Models\SOP;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class SOPController extends Controller {
	function index(){
		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['list_sop'] = SOP::all();
		return view('Admin.SOP.index', $data);
	}

	function store(Request $request){

		$sop = new SOP;
		$sop-> user_id = request()->user()->id;
		$sop-> nama = request('nama');
		$sop-> nomor = request('nomor');
		$sop->handleUploadFile();

		$sop-> save();
		return redirect ('Admin/sop')-> with ('success', 'SOP Berhasil Ditambahkan');

	}

	function show(SOP $sop){

		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['sop'] = $sop;
		return view('Admin.SOP.detail-dokumen', $data);

	}

	function edit(SOP $sop){
		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['sop'] = $sop;
		return view('Admin.SOP.edit', $data);
	}

	function update(SOP $sop){
		$sop-> nama = request('nama');
		$sop-> nomor = request('nomor');
		$sop->handleUploadFile();

		$sop-> save();
		return redirect ('Admin/sop')-> with ('success', 'SOP Berhasil Diedit');

	}

	function destroy(SOP $sop){
		$sop->handleDeleteFile();
		$sop->delete();

		return redirect ('Admin/sop')-> with ('danger', 'SOP Berhasil Dihapus');

	}

}