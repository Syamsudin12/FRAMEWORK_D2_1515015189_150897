<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'Mahasiswa';
    protected $fillable = ['id','nama','nim','alamat','pengguna_id'];

    protected $table = 'pengguna'
    public function pengguna()
    {
    	return $this->belongTo(pengguna::class);
    }
    public function Jadwal_matakuliyah()
    {
    	return $this->hasOne(Jadwal_matakuliyah::class);
    }
}
