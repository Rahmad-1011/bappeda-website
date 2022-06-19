<?php

namespace App\Models;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Berita extends Model{
	protected $table = 'berita';

	function user(){
		return $this->belongsTo(User::class, 'user_id', 'id');
	}

	function kategori(){
		return $this->belongsTo(Kategori::class, 'id_kategori');
	}

	function handleUploadFoto(){

		if(request()->hasFile('foto')){
			$foto = request()->file('foto');
			$destination = "foto/berita";
			$randomStr = Str::random(5);
			$filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
			$url = $foto->storeAs($destination, $filename);
			$this->foto = "app/".$url;
			$this->save;
		}
	}
	
	function handleDeleteFoto(){
		$foto = $this->foto;
		return true;
	}
}