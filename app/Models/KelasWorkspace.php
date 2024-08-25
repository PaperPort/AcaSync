<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DetailKelasWorkspace;
use App\Models\User;
use App\Models\JoinKelasWorkspace;

class KelasWorkspace extends Model
{
    use HasFactory;
    protected $table = 'kelas_workspace';

    protected $fillable = [
        'workspace_id',
        'detailKelas_id',
        'waliKelas_id'
    ];

    public $timestamps = false;

    public function detailKelas() {
        return $this->belongsTo(DetailKelasWorkspace::class, 'detailKelas_id');
    }

    public function waliKelas() {
        return $this->belongsTo(User::class, 'waliKelas_id');
    }

    public function joinKelas()
    {
        return $this->hasMany(JoinKelasWorkspace::class, 'kelasWorkspace_id');
    }
}
