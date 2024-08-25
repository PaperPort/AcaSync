<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasMapelWorkspace extends Model
{
    use HasFactory;
    protected $table = 'kelas_mapel_workspace';

    public $timestamps = false;

    protected $fillable = [
        'kelasWorkspace_id',
        'mapelWorkspace_id',
        'guruMapel_id'
    ];

    public function kelasWorkspace() {
        return $this->belongsTo(KelasWorkspace::class, 'kelasWorkspace_id');
    }

    public function mapelWorkspace() {
        return $this->belongsTo(MapelWorkspace::class, 'mapelWorkspace_id');
    }

    public function guruMapel() {
        return $this->belongsTo(UserWorkspace::class, 'guruMapel_id');
    }
}
