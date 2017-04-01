<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_Matakuliyah extends Model
{
    protected $table = 'Jadwal_Matakuliyah';
    protected $fillable = ['id','mahasiswa_id','ruangan_id','dosen_matakuliyah_id'];

    protected $table = 'Jadwal_Matakuliyah'
    public function Mahasiswa()
    {
    	return $this->belongTo(Mahasiswa::class);
    }
    public function Dosen_Matakuliyah()
    {
    	return $this->belongTo(Dosen_Matakuliyah::class);
    }
    public function Ruangan()
    {
    	return $this->belongTo(Ruangan::class);
    }
}