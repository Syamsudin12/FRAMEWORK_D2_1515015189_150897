<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['Username','password'];

    protected $table = 'pengguna'
    public function Dosen()
    {
    	return $this->hasOne(Dosen::class);
    }
    public function Mahasiswa()
    {
    	return $this->hasOne(Mahasiswa::class);
    }
    public function peran()
    {
    	return $this->belongToMany(peran::class);
    }
}
