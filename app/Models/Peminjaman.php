<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'peminjaman';
    protected $fillable = ['id_mahasiswa', 'id_buku', 'tgl_pinjam','tgl_kembali'];

    // public function pilihKategori()
    // {
    //     $this->buku = Book::where('id', $this->id_buku)->get();
    // }

    public function book()
    {
       return $this->hasMany(Book::class);
    }
}
