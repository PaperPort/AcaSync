<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWorkspace extends Model
{
    use HasFactory;
    protected $table = 'users_workspace';

    protected $fillable = [
        'workspace_id',
        'detailUser_id',
        'user_id',
        'rw_id',
        'akun_terkait'
    ];

    public $timestamps = false;
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function role() {
        return $this->belongsTo(RoleWorkspace::class,'rw_id');
    }

    public function detailUser() {
        return $this->belongsTo(DetailUserWorkspace::class, 'detailUser_id');
    }

    public function workspace() {
        return $this->belongsTo(Workspace::class, 'workspace_id');
    }
}
