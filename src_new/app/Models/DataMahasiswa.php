<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataMahasiswa extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'data_mahasiswas';
    protected $fillable = [
        'nama_mahasiswa',
        'nim',
        'email',
        'ttl',
        'jenis_kelamin',
        'agama',
        'alamat',
        'fakultas',
        'jurusan',
        'status',
    ];
}
