<?php

namespace App\Models;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SOP extends Model{
	protected $table = 'sop';

	function user(){
		return $this->belongsTo(User::class, 'user_id', 'id');
	}

	function handleUploadFile(){

		if(request()->hasFile('file')){
			$file = request()->file('file');
			$destination = "file/sop";
			$randomStr = Str::random(5);
			$filename = $this->id."-".time()."-".$randomStr.".".$file->extension();
			$url = $file->storeAs($destination, $filename);
			$this->file = "app/".$url;
			$this->save;
		}
	}
	
	function handleDeleteFile(){
		$file = $this->file;
		return true;
	}
}