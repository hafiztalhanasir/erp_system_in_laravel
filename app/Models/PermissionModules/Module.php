<?php

namespace App\Models\PermissionModules;

use App\Models\Permissions\Permission;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model {
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function permissions() {
        return $this->hasMany(Permission::class, 'module_id');
    }

}
