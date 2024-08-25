<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKelasWorkspace extends Model
{
    use HasFactory;
    protected $table = 'detail_kelas_workspace';

    protected $fillable = [
        'kode_kelas',
        'nama',
    ];
}
