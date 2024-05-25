<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lelang extends Model
{
    use HasFactory;

    protected $table = 'lelang';

    protected $primaryKey = 'id_lelang';

    protected $fillable = [
        'nama_barang',
        'id_user',
        'id_petugas',
        'id_barang',
        'tgl_lelang',
        'harga_akhir',
        'status',
    ];

    public $timestamps = false;

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }
}
