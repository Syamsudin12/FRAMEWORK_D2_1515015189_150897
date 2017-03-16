<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen;

class DosenController extends Controller
{
    public function awal()
   {
   		return "Hello dari DosenController";
   }
      public function tambah()
   {
   		return $this->simpan();
   }
      public function simpan()
   {
   		$dosen = new dosen();
   		$dosen->id 			= 'N0001';
   		$dosen->nama 		= 'udang';
   		$dosen->nip 		= 'K0001';
   		$dosen->alamat 	= 'jalan lambung';
   		$dosen->pengguna_id = '001';
   		$dosen->save();
   		return "data dengan username {$dosen->nama} telah disimpan";
   }
}
