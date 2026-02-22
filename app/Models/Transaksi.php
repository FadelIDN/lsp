<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = [
        'nis',
        'name',
        'kelas',
        'jurusan',
        'tanggal_pinjam',
        'tanggal_kembali',
    ];
}
