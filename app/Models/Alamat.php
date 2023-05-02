<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    use HasFactory;

    protected $fillable = [
        'idUser',
        'nama',
        'alamat',
        'kecamatan',
        'kota',
        'kode_post',
    ];

}
