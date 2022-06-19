<?php
namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use cursorPaginate;
use Paginate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{
	
	function index(){
		return view('Admin.Pra.index');
	}

	function create(){
		return view('Admin.Pra.daftar-admin');

	}

	function store(){
		$user = new User;
		$user-> nama = request('nama');
		$user-> username = request('username');
		$user-> password= bcrypt(request('password'));
		
		$user-> save();

		return redirect ('Admin/login')-> with('success', 'Admin berhasil ditambahkan');

	}

	public function edit(Request $request){

    	$user = User::where('id', Auth::user()->id)->first();
    	$user->nama = request('nama');
    	$user->username = request('username');
        $user->handleUploadFoto();
		$user-> update();
    	
        return back()->with('success', 'Edit Profil Berhasil');
    }

	public function GantiPassword(Request $request){
        $request->validate([
            'baru' => 'required|min:5|max:255'
        ]);

        $data = request()->all();

        if(request('lama')){
            if(request('lama')){
                $user = Auth::user();
                $check = Hash::check(request('lama'), $user->password);
                if($check){
                    if(request('baru') == request('konfirmasi')){

                        $user->password = bcrypt(request('baru'));
                        $user->save();

                        Auth::logout();
                        return redirect('Admin/login')->with('warning', 'Masukan Password Baru');

                    }else{
                        return back()->with('danger', 'Konfirmasi Password Tidak Sesuai');
                    }
            }else{
                return back()->with('danger', 'Password Lama Anda Salah');
            }
        }else{
            return back()->with('danger', 'Password Lama Kosong');
            }
        }
    }
}