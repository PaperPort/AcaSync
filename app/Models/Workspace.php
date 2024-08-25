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
        'kabupaten',
        'kode_akses'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
