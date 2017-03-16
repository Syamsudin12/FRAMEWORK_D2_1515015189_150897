<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\jadwal_matakuliyah;

class Jadwal_MatakuliyahController extends Controller
{
     public function awal()
   {
   		return "Hello dari Jadwal_MatakuliyahController";
   }
      public function tambah()
   {
   		return $this->simpan();
   }
      public function simpan()
   {
   		$jadwal_matakuliyah = new jadwal_matakuliyah();
   		$jadwal_matakuliyah->id 				= 'N0003';
   		$jadwal_matakuliyah->mahasiswa_id		= '16';
   		$jadwal_matakuliyah->ruangan_id			= '1';
   		$jadwal_matakuliyah->dosen_matakuliyah_id	= '23';
   		$jadwal_matakuliyah->save();
   		return "data dengan username {$jadwal_matakuliyah->id} telah disimpan";
   }
}
