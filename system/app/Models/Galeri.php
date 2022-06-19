<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Galeri extends Model{
	protected $table = 'galeri';

	function user(){
		return $this->belongsTo(User::class, 'user_id', 'id');
	}

	function handleUploadFoto(){

		if(request()->hasFile('foto')){
			$fotos = request()->file('foto');

			foreach ($fotos as $foto) {
				$destination = "galeri";
				$randomStr = Str::random(5);
				$filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
				$url = $foto->storeAs($destination, $filename);
				$this->foto = "app/".$url;
				$this->save;
			}
		}
	}
	
	function handleDeleteFoto(){
		$foto = $this->foto;
		return true;
	}
}