<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Masyarakat extends Authenticatable
{
    use HasFactory;

    protected $table = 'masyarakat'; // Specify the correct table name

    protected $primaryKey = 'id_user';

    protected $fillable = [
        'nama_lengkap',
        'username',
        'password',
        'telp',
    ];

    protected $hidden = [
        'password',
    ];

    public $timestamps = false; // Disable automatic timestamp management


}
