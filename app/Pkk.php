<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pkk extends Model
{
    protected $table = "pemdes";

    protected $fillable = ['nik', 'jabatan', 'periode', 'jenis'];
}
