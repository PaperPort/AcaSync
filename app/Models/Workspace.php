<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'alamat',
        'provinsi',
        'kabupaten'
    ];

    protected $hidden = [
        'kode_akses'
    ];
}
