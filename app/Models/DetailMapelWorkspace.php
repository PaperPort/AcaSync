<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailMapelWorkspace extends Model
{
    use HasFactory;
    protected $table = 'detail_mapel_workspace';

    protected $fillable = [
        'nama',
    ];
}
