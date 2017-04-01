<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'Dosen';
    protected $fillable = ['id','nama','nip','alamat','pengguna_id'];

    protected $table = 'Dosen'
    public function pengguna()
    {
    	return $this->belongTo(pengguna::class);
    }
    public function Dosen_Matakuliyah()
    {
    	return $this->hasOne(Dosen_Matakuliyah::class);
    }
}
