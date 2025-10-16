<?php

namespace Database\Seeders;

use App\Models\PermissionModules\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;

class PermissionsSeeder extends Seeder
{
    public function run(): void
    {
        $modules = Module::all();
        $permissions   = ['list', 'create', 'edit', 'delete', 'detail'];
        foreach ($modules as $module) {
            foreach ($permissions as $permission) {
                $permission       = $module->name.'-'.$permission;
                Permission::updateOrCreate(['name' => $permission],[
                    'name'       => $permission,
                    'guard_name' => 'web',
                    'module_id'  => $module->id
                ]);
            }
        }
    }
}
