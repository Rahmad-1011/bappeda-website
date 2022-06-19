<?php
namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller{
	
	function home(){
		return view('home');
	}

	function tentang(){
		return view('tentang');
	}

	function kontak(){
		return view('kontak');
	}

	function beranda(){
		$data['alumni'] = Auth::user();
		return view('Alumni.beranda', $data);
	}

	function EditDataAlumni(User $alumni){
		$alumni = Auth::user();
		$alumni->no_hp = request('no_hp');
		$alumni->email = request('email');
		$alumni->nik = request('nik');
		$alumni->alamat = request('alamat');
		$alumni->tahun_msk = request('tahun_msk');
		$alumni->tahun_lls = request('tahun_lls');
		$alumni->tempat_lahir = request('tempat_lahir');
		$alumni->tanggal_lahir = request('tanggal_lahir');
		$alumni->nama_domisili = request('nama_domisili');
		$alumni->handleUploadFoto();
		$alumni->save();
		return redirect()->back()->with('success', 'Alumni berhasil diedit');
	}

	function EditDataPekerjaan(User $alumni){
		$alumni = Auth::user();
		$alumni->nama_pekerjaan = request('nama_pekerjaan');
		$alumni->tahun_kerja = request('tahun_kerja');
		$alumni->alamat_pekerjaan = request('alamat_pekerjaan');
		$alumni->email_kerja = request('email_kerja');
		$alumni->histori_pekerjaan = request('histori_pekerjaan');
		$alumni->save();
		return redirect()->back()->with('success', 'Data Pekerjaan Anda berhasil diedit');
	}

	function DataPekerjaan(){
		$data['alumni'] = Auth::user();
		return view('Alumni.data-pekerjaan', $data);
	}

	public function GantiPassword(){
        $data['alumni'] = User::where('id', Auth::user()->id)->first();

        return view('Alumni.ganti-password', $data);
    }

    public function Store(){

        $data = request()->all();

        if(request('lama')){
            if(request('lama')){
                $alumni = Auth::user();
                $check = Hash::check(request('lama'), $alumni->password);
                if($check){
                    if(request('baru') == request('konfirmasi')){

                        $alumni->password = bcrypt(request('baru'));
                        $alumni->save();

                        Auth::logout();
                        return redirect('Alumni/login')->with('warning', 'Masukan Password Baru');

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