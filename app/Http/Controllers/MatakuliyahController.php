<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\matakuliyah;

class MatakuliyahController extends Controller
{
    public function awal()
   {
   		return "Hello dari MatakuliyahController";
   }
      public function tambah()
   {
   		return $this->simpan();
   }
      public function simpan()
   {
   		$matakuliyah = new matakuliyah();
   		$matakuliyah->id 			= 'N0001';
   		$matakuliyah->title 		= 'coba';
   		$matakuliyah->keterang 		= 'Ada';
   		$matakuliyah->save();
   		return "data dengan username {$matakuliyah->title} telah disimpan";
   }
}
