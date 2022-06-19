<?php 

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
	
	function LoginAdmin(){
		return view('Admin.login');
	}

	function ProsesLoginAdmin(){
		if (Auth::attempt(['username' => request('username'), 'password' => request('password')])) {
			return redirect('Admin/beranda')-> with('success', 'Login Berhasil');
		}else{
			return back()->with('danger', 'Login Gagal. Silahkan cek Username dan Password anda');
		}
	}

	function Logout(){
		Auth::logout();
		return redirect('Admin/login')->with('warning', 'Logout Berhasil');
	}

}