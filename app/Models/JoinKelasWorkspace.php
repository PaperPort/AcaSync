<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserWorkspace;
use App\Models\KelasWorkspace;

class JoinKelasWorkspace extends Model
{
    use HasFactory;
    protected $table = 'join_kelas_workspace';

    protected $fillable = [
        'kelasWorkspace_id',
        'userWorkspace_id',
    ];

    public $timestamps = false;

    public function userWorkspace() {
        return $this->belongsTo(UserWorkspace::class, 'userWorkspace_id');
    }

    public function kelasWorkspace(){
        return $this->belongsTo(KelasWorkspace::class, 'kelasWorkspace_id');
    }
}
