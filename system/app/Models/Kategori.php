<?php

namespace App\Models;
use Illuminate\Support\Str;
use App\Models\Berita;

class Kategori extends Model{
	protected $table = 'kategori';
	protected $guarded =['id'];


	public function berita(){
		return $this->hasMany(Berita::class, 'id_kategori');
	}
}