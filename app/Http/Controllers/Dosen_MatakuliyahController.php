<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen_matakuliyah;

class Dosen_MatakuliyahController extends Controller
{
    public function awal()
   {
   		return "Hello dari Dosen_MatakuliyahController";
   }
      public function tambah()
   {
   		return $this->simpan();
   }
      public function simpan()
   {
   		$dosen_matakuliyah = new dosen_matakuliyah();
   		$dosen_matakuliyah->id 				= 'N0001';
   		$dosen_matakuliyah->dosen_id 		= '8';
   		$dosen_matakuliyah->matakuliyah_id	= '2';
   		$dosen_matakuliyah->save();
   		return "data dengan username {$dosen_matakuliyah->id} telah disimpan";
   }
}
