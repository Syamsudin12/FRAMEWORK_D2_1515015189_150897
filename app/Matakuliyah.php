<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliyah extends Model
{
    protected $table = 'Matakuliyah';
    protected $fillable = ['id','title','keterang','created_at','updated_at'];
}
