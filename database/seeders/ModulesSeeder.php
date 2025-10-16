<?php

namespace Database\Seeders;

use App\Models\PermissionModules\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModulesSeeder extends Seeder
{
    public function run(): void
    {
        $modules = ['role', 'user', 'permission', 'leave'];
        foreach ($modules as $module) {
            Module::updateOrCreate(['name' => $module], [
                'name' => $module
            ]);
        }
    }
}
