<?php

namespace App\Models;
use App\Models\LPN;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SuratKeluar extends Model{
	protected $table = 'srt_klr';

	function user(){
		return $this->belongsTo(User::class, 'user_id', 'id');
	}

	function handleUpload(){

		if(request()->hasFile('file')){
			$file = request()->file('file');
			$destination = "file/surat-keluar";
			$randomStr = Str::random(5);
			$filename = $this->id."-".time()."-".$randomStr.".".$file->extension();
			$url = $file->storeAs($destination, $filename);
			$this->file = "app/".$url;
			$this->save;
		}
	}
	
	function handleDelete(){
		$file = $this->file;
		return true;
	}
}