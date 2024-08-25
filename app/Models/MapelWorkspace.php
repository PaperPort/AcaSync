<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapelWorkspace extends Model
{
    use HasFactory;
    protected $table = 'mata_pelajaran_workspace';

    protected $fillable = [
        'workspace_id',
        'detailMapel_id'
    ];

    public $timestamps = false;

    public function workspace() {
        return $this->belongsTo(Workspace::class, 'workspace_id');
    }

    public function detailMapel() {
        return $this->belongsTo(DetailMapelWorkspace::class, 'detailMapel_id');
    }

}
