<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $fillable = [
        'nama',
        'nim_nis',
        'kelas_jurusan',
        'kontak'
    ];
}
