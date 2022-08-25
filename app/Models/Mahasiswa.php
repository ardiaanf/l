<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_mahasiswa';
    protected $table = 'mahasiswas';
    protected $fillable = ['nama_mahasiswa','jenis_kelamin','alamat','email','no_telp'];
}
