<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleWorkspace extends Model
{
    use HasFactory;
    protected $table = 'role_workspace';

    protected $fillable = [
        'workspace_id',
        'role_id'
    ];

    public $timestamps = false;
    public function role() {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
