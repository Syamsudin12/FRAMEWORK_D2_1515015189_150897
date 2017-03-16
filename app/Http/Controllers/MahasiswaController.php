<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswa;

class MahasiswaController extends Controller
{
     public function awal()
   {
   		return "Hello dari MahasiswaController";
   }
      public function tambah()
   {
   		return $this->simpan();
   }
      public function simpan()
   {
   		$mahasiswa = new mahasiswa();
   		$mahasiswa->id 			= 'N0001';
   		$mahasiswa->nama 		   = 'udang';
   		$mahasiswa->nim 		   = 'K0001';
   		$mahasiswa->alamat 		= 'jalan lambung';
         $mahasiswa->pengguna_id     = '001';
   		$mahasiswa->save();
   		return "data dengan username {$mahasiswa->nama} telah disimpan";
   }
}
