<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller {
	function index(){
		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['list_profile'] = Profile::all();
		return view('Admin.Profile.index', $data);
	}

	function store(Request $request){

		$profile = new Profile;
		$profile-> user_id = request()->user()->id;
		$profile-> konten = request('konten');
		$profile->handleUploadFoto();

		$profile-> save();
		return redirect ('Admin/profile-bappeda')-> with ('success', 'Profile Berhasil Ditambahkan');

	}

	function show(Profile $profile){

		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['profile'] = $profile;
		return view('Admin.Profile.show', $data);

	}

	function edit(Profile $profile){
		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['profile'] = $profile;
		return view('Admin.Profile.edit', $data);
	}

	function update(Profile $profile){
		$profile-> konten = request('konten');
		$profile->handleUploadFoto();

		$profile-> save();
		return redirect ('Admin/profile-bappeda')-> with ('success', 'Profile Berhasil Diedit');

	}

	function destroy(Profile $profile){
		$profile->handleDeleteFoto();
		$profile->delete();

		return redirect ('Admin/profile-bappeda')-> with ('danger', 'Profile Berhasil Dihapus');

	}

}