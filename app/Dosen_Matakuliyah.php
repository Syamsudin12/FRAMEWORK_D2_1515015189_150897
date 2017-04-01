<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliyah extends Model
{
    protected $table = 'Dosen_Matakuliyah';
    protected $fillable = ['id','dosen_id','matakuliyah_id'];

    public function Dosen()
    {
    	return $this->belongTo(Dosen::class);
    }
    public function Jadwal_Matakuliyah()
    {
    	return $this->hasOne(Jadwal_Matakuliyah::class);
    }
    public function Matakuliyah()
    {
    	return $this->belongTo(Matakuliyah::class);
    }
}