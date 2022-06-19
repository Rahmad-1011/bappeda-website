<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class PegawaiController extends Controller {
	function index(){
		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['list_pegawai'] = Pegawai::all();
		return view('Admin.Pegawai.index', $data);
	}

	function store(Request $request){

		$pegawai = new Pegawai;
		$pegawai-> nama = request('nama');
		$pegawai-> jenis_kelamin = request('jenis_kelamin');
		$pegawai-> nip = request('nip');
		$pegawai-> tmpt_lahir = request('tmpt_lahir');
		$pegawai-> tgl_lahir = request('tgl_lahir');
		$pegawai-> jabatan = request('jabatan');
		$pegawai-> jenis_jabatan = request('jenis_jabatan');
		$pegawai-> pendidikan = request('pendidikan');
		$pegawai-> thn_lulus = request('thn_lulus');
		$pegawai-> tk_ijazah = request('tk_ijazah');
		$pegawai-> jurusan_pendidikan = request('jurusan_pendidikan');
		$pegawai-> gol_pangkat = request('gol_pangkat');
		$pegawai-> alamat = request('alamat');
		$pegawai-> eselon = request('eselon');
		$pegawai-> m_kerja_thn = request('m_kerja_thn');
		$pegawai-> m_kerja_bln = request('m_kerja_bln');
		$pegawai-> lthn_jabatan = request('lthn_jabatan');
		$pegawai-> lthn_jabatan_thn = request('lthn_jabatan_thn');
		$pegawai-> tmt_pangkat = request('tmt_pangkat');
		$pegawai-> tmt_jabatan = request('tmt_jabatan');
		$pegawai->handleUploadFoto();

		$pegawai-> save();
		return redirect ('Admin/pegawai')-> with ('success', 'Data Pegawai Berhasil Ditambahkan');

	}

	function show(Pegawai $pegawai){

		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['pegawai'] = $pegawai;
		return view('Admin.Pegawai.show', $data);

	}

	function edit(Pegawai $pegawai){
		$data['user'] = User::where('id', Auth::user()->id)->first();
		$data['pegawai'] = $pegawai;
		return view('Admin.Pegawai.edit', $data);
	}

	function update(Pegawai $pegawai){
		$pegawai-> nama = request('nama');
		$pegawai-> jenis_kelamin = request('jenis_kelamin');
		$pegawai-> nip = request('nip');
		$pegawai-> tmpt_lahir = request('tmpt_lahir');
		$pegawai-> tgl_lahir = request('tgl_lahir');
		$pegawai-> jabatan = request('jabatan');
		$pegawai-> jenis_jabatan = request('jenis_jabatan');
		$pegawai-> pendidikan = request('pendidikan');
		$pegawai-> thn_lulus = request('thn_lulus');
		$pegawai-> tk_ijazah = request('tk_ijazah');
		$pegawai-> jurusan_pendidikan = request('jurusan_pendidikan');
		$pegawai-> gol_pangkat = request('gol_pangkat');
		$pegawai-> alamat = request('alamat');
		$pegawai-> eselon = request('eselon');
		$pegawai-> m_kerja_thn = request('m_kerja_thn');
		$pegawai-> m_kerja_bln = request('m_kerja_bln');
		$pegawai-> lthn_jabatan = request('lthn_jabatan');
		$pegawai-> lthn_jabatan_thn = request('lthn_jabatan_thn');
		$pegawai-> tmt_pangkat = request('tmt_pangkat');
		$pegawai-> tmt_jabatan = request('tmt_jabatan');
		$pegawai->handleUploadFoto();

		$pegawai-> save();
		return redirect ('Admin/pegawai')-> with ('success', 'Data Pegawai Berhasil Diedit');

	}

	function destroy(Pegawai $pegawai){
		$pegawai->handleDeleteFoto();
		$pegawai->delete();

		return redirect ('Admin/pegawai')-> with ('danger', 'Data Pegawai Berhasil Dihapus !!!');

	}

}