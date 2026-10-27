<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'biodata_tabel_nim';

    protected $fillable = [
        'nim',
        'nama_lengkap',
        'program_studi',
        'kelas',
        'jenis_kelamin',
        'email',
        'nomor_telepon',
        'alamat',
    ];
}
