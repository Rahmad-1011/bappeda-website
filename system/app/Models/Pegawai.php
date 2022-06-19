<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Pegawai extends Model{
	protected $table = 'pegawai';

	function user(){
		return $this->belongsTo(User::class, 'user_id', 'id');
	}

	function handleUploadFoto(){

		if(request()->hasFile('foto')){
			$foto = request()->file('foto');
			$destination = "foto/pegawai";
			$randomStr = Str::random(5);
			$filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
			$url = $foto->storeAs($destination, $filename);
			$this->foto = "app/".$url;
			$this->save;
		}
	}
	
	function handleDeleteFile(){
		$foto = $this->foto;
		return true;
	}
}