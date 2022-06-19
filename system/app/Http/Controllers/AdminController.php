<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\Event;
use App\Models\Berita;

use Auth;

class AdminController extends Controller{
	
	function beranda(){
		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['pegawai'] = Pegawai::all();
		$data['kegiatan'] = Event::all();
		$data['berita'] = Berita::all();
		return view('Admin.beranda', $data);
	}

}