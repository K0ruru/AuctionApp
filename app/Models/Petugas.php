<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;

class Petugas extends AuthenticatableUser implements Authenticatable
{
    use HasFactory;

    protected $table = 'petugas';

    protected $primaryKey = 'id_petugas';

    protected $fillable = [
        'nama_petugas',
        'username',
        'password',
        'id_level',
    ];

    public $timestamps = false;

    public function level()
    {
        return $this->belongsTo(Level::class, 'id_level', 'id_level');
    }
}
