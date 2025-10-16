<?php

namespace App\Models\Permissions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleHasPermission extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'permission_id',
        'role_id',
    ];
}
