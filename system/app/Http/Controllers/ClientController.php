<?php
namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use App\Models\Berita;
use App\Models\Pegawai;
use App\Models\Galeri;
use App\Models\Anjab;
use App\Models\SOP;
use App\Models\Nilai;
use App\Models\VisiMisi;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller{
	
	function beranda(){
        $data['kaban'] = Pegawai::where('id', 1)->get();
        $data['sekban'] = Pegawai::where('id', 2)->get();
        $data['pegawai'] = Pegawai::all();
        $data['galeri'] = Galeri::all();
        $data['anjab'] = Anjab::all();
        $data['sop'] = SOP::all();
        $data['list_berita'] = Berita::paginate(2);
        $data['nilai'] = Nilai::all();

		return view('Client.beranda', $data);
	}

    function Berita(){
        $data['list_berita'] = Berita::paginate(6);

        return view('Client.berita', $data);
    }

	function DetailBerita(Berita $berita, Pegawai $pegawai){
		$data['berita'] = $berita;
        $data['pegawai'] = $pegawai;

		return view('Client.detail-berita', $data);
	}

    function VisiMisi(Pegawai $pegawai){
        $data['visimisi'] = VisiMisi::all();
        $data['pegawai'] = $pegawai;

        return view('Client.visi-misi', $data);
    }

    function Anjab(Pegawai $pegawai){
        $data['list_anjab'] = Anjab::all();
        $data['pegawai'] = $pegawai;
        return view('Client.anjab', $data);
    }

    function SOP(Pegawai $pegawai){
        $data['list_sop'] = SOP::all();
        $data['pegawai'] = $pegawai;
        return view('Client.sop', $data);
    }

    function Profile(Pegawai $pegawai){
        $data['profile'] = Profile::all();
        $data['pegawai'] = $pegawai;
        return view('Client.profile', $data);
    }

    function Pegawai(){
        $data['list_pegawai'] = Pegawai::all();

        return view('Client.Pegawai.index', $data);
    }

    function DetailPegawai(Pegawai $pegawai){
        $data['pegawai'] = $pegawai;
        return view('Client.Pegawai.detail', $data);
    }

    function Galeri(Galeri $galeri){
        $data['list_galeri'] = Galeri::paginate(6);
        $data['galeri'] = $galeri;

        return view('Client.galeri', $data);
    }

    function GaleriDetail(Galeri $galeri){
        $data['galeri'] = $galeri;

        return view('Client.detail-galeri', $data);
    }


    
}