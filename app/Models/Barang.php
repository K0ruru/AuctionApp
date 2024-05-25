<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_barang',
        'tgl_date',
        'harga_awal',
        'deskripsi',
    ];

    public function lelang()
    {
        return $this->hasOne(Lelang::class, 'id_barang');
    }
}
