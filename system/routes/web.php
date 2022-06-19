<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AnjabController;
use App\Http\Controllers\SOPController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NilaiController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('Admin/login', [AuthController::class, 'LoginAdmin']);
Route::post('Admin/login', [AuthController::class, 'ProsesLoginAdmin']);
Route::get('Admin/logout', [AuthController::class, 'Logout']);
Route::get('Admin/daftar-admin', [AdminController::class, 'create']);
Route::post('Admin/daftar-admin', [AdminController::class, 'store']);

			Route::get('0/registrasi', [UserController::class, 'create']);
			Route::post('0/registrasi', [UserController::class, 'store']);

			Route::get('0/beranda', [UserController::class, 'index']);

			//Client
			Route::get('Beranda', [ClientController::class, 'beranda']);
			Route::get('Berita', [ClientController::class, 'Berita']);
			Route::get('Berita/{berita}', [ClientController::class, 'DetailBerita']);
			Route::get('Profil/Visi-Misi', [CLientController::class, 'VisiMisi']);
			Route::get('Dokumen/Anjab', [ClientController::class, 'Anjab']);
			Route::get('Dokumen/SOP', [ClientController::class, 'SOP']);
			Route::get('Profil/Profile-BAPPEDA', [ClientController::class, 'Profile']);
			Route::get('Profil/Pegawai', [ClientController::class, 'Pegawai']);
			Route::get('Profil/Pegawai/{pegawai}', [ClientController::class, 'DetailPegawai']);
			Route::get('Galeri', [ClientController::class, 'Galeri']);
			Route::get('Galeri/{galeri}', [ClientController::class, 'GaleriDetail']);
			

	Route::prefix('Admin')->group(function(){

			Route::get('beranda', [AdminController::class, 'beranda']);

			Route::get('berita', [BeritaController::class, 'index']);
			Route::get('berita/tambah', [BeritaController::class, 'create']);
			Route::post('berita/simpan', [BeritaController::class, 'store']);
			Route::get('berita/{berita}', [BeritaController::class, 'show']);
			Route::get('berita/edit/{berita}', [BeritaController::class, 'edit']);
			Route::put('berita/simpan/{berita}', [BeritaController::class, 'update']);
			Route::delete('berita/hapus/{berita}', [BeritaController::class, 'destroy']);

			Route::get('kategori', [KategoriController::class, 'index']);
			Route::get('kategori/tambah', [KategoriController::class, 'create']);
			Route::post('kategori/simpan', [KategoriController::class, 'store']);
			Route::get('kategori/{kategori}', [KategoriController::class, 'show']);
			Route::get('kategori/edit/{kategori}', [KategoriController::class, 'edit']);
			Route::put('kategori/simpan/{kategori}', [KategoriController::class, 'update']);
			Route::delete('kategori/{kategori}', [KategoriController::class, 'destroy']);

			Route::get('anjab', [AnjabController::class, 'index']);
			Route::post('anjab/simpan', [AnjabController::class, 'store']);
			Route::get('anjab/{anjab}', [AnjabController::class, 'show']);
			Route::get('anjab/edit/{anjab}', [AnjabController::class, 'edit']);
			Route::put('anjab/simpan/{anjab}', [AnjabController::class, 'update']);
			Route::delete('anjab/{anjab}', [AnjabController::class, 'destroy']);

			Route::get('sop', [SOPController::class, 'index']);
			Route::post('sop/simpan', [SOPController::class, 'store']);
			Route::get('sop/{sop}', [SOPController::class, 'show']);
			Route::get('sop/edit/{sop}', [SOPController::class, 'edit']);
			Route::put('sop/simpan/{sop}', [SOPController::class, 'update']);
			Route::delete('sop/{sop}', [SOPController::class, 'destroy']);

			Route::get('galeri', [GaleriController::class, 'index']);
			Route::post('galeri/simpan', [GaleriController::class, 'store']);
			Route::get('galeri/{galeri}', [GaleriController::class, 'show']);
			Route::get('galeri/edit/{galeri}', [GaleriController::class, 'edit']);
			Route::put('galeri/simpan/{galeri}', [GaleriController::class, 'update']);
			Route::delete('galeri/{galeri}', [GaleriController::class, 'destroy']);

			Route::get('event', [FullCalenderController::class, 'beranda']);
			Route::get('kegiatan', [FullCalenderController::class, 'index']);
			Route::post('kegiatan/action', [FullCalenderController::class, 'action']);

			Route::get('visi-misi', [VisiMisiController::class, 'index']);
			Route::post('visi-misi/simpan', [VisiMisiController::class, 'store']);
			Route::get('visi-misi/{visimisi}', [VisiMisiController::class, 'show']);
			Route::get('visi-misi/edit/{visimisi}', [VisiMisiController::class, 'edit']);
			Route::put('visi-misi/simpan/{visimisi}', [VisiMisiController::class, 'update']);
			Route::delete('visi-misi/{visimisi}', [VisiMisiController::class, 'destroy']);

			Route::get('profile-bappeda', [ProfileController::class, 'index']);
			Route::post('profile-bappeda/simpan', [ProfileController::class, 'store']);
			Route::get('profile-bappeda/{profile}', [ProfileController::class, 'show']);
			Route::get('profile-bappeda/edit/{profile}', [ProfileController::class, 'edit']);
			Route::put('profile-bappeda/simpan/{profile}', [ProfileController::class, 'update']);
			Route::delete('profile-bappeda/{profile}', [ProfileController::class, 'destroy']);

			Route::get('nilai', [NilaiController::class, 'index']);
			Route::post('nilai/simpan', [NilaiController::class, 'store']);
			Route::get('nilai/{nilai}', [NilaiController::class, 'show']);
			Route::get('nilai/edit/{nilai}', [NilaiController::class, 'edit']);
			Route::put('nilai/simpan/{nilai}', [NilaiController::class, 'update']);
			Route::delete('nilai/{nilai}', [NilaiController::class, 'destroy']);

			Route::get('pegawai', [PegawaiController::class, 'index']);
			Route::post('pegawai/simpan', [PegawaiController::class, 'store']);
			Route::get('pegawai/{pegawai}', [PegawaiController::class, 'show']);
			Route::get('pegawai/edit/{pegawai}', [PegawaiController::class, 'edit']);
			Route::put('pegawai/simpan/{pegawai}', [PegawaiController::class, 'update']);
			Route::delete('pegawai/{pegawai}', [PegawaiController::class, 'destroy']);


			Route::get('user', [UserController::class, 'index']);
			Route::get('user/tambah', [UserController::class, 'create']);
			Route::post('user/simpan', [UserController::class, 'store']);
			Route::get('user/{user}', [UserController::class, 'show']);
			Route::get('user/edit/{user}', [UserController::class, 'edit']);
			Route::put('user/simpan/{user}', [UserController::class, 'update']);
			Route::delete('user/{user}', [UserController::class, 'destroy']);

			Route::put('profile/update', [UserController::class, 'edit']);
			Route::put('profile/ganti-password', [UserController::class, 'GantiPassword']);

			//Route::get('komentar', [KomentarController::class, 'Index']);
			//Route::get('komentar/{produk}', [KomentarController::class, 'BalasKomentar']);
			//Route::post('komentar/{produk}', [KomentarController::class, 'PostKomentar']);
			//Route::get('profile', [TokoController::class, 'Profile']);
			//Route::post('profile', [TokoController::class, 'Update']);
			//Route::get('ganti-password', [TokoController::class, 'GantiPassword']);
			//Route::post('ganti-password', [TokoController::class, 'Store']);
	});
