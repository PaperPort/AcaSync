<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailUserWorkspace extends Model
{
    use HasFactory;
    protected $table = 'detail_users_workspace';
    protected $fillable = [
        'nomor_induk',
        'tahun_ajaran',
        'is_active',
    ];

}
