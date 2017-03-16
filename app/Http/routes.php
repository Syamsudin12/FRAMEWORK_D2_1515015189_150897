<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello-word', function () {
    return ('hello-word');
});
//Route::get('pengguna/{pengguna}', function ($pengguna) {
	//return "hello-word dari pengguna $pengguna";
//});

Route::get('kelasd2/framework/{mhs?}', function ($mhs="Anonim") {
	return "Selamat Datang $mhs";
});
Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');

Route::get('mahasiswa','MahasiswaController@tambah');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');

Route::get('dosen','DosenController@tambah');
Route::get('dosen/tambah','DosenController@tambah');

Route::get('matakuliyah','MatakuliyahController@tambah');
Route::get('matakuliyah/tambah','MatakuliyahController@tambah');

Route::get('dosenmatakuliyah','Dosen_MatakuliyahController@tambah');
Route::get('dosenmatakuliyah/tambah','Dosen_MatakuliyahController@tambah');

Route::get('jadwal','Jadwal_MatakuliyahController@tambah');
Route::get('jadwal/tambah','Jadwal_MatakuliyahController@tambah');

Route::get('ruangan','RuanganController@tambah');
Route::get('ruangan/tambah','RuanganController@tambah');