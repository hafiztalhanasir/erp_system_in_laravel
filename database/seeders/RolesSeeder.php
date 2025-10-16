<?php

namespace Database\Seeders;

use App\Models\Roles\CustomRole as Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        $roles = ['super admin', 'admin', 'manager', 'user'];
        foreach ($roles as $role) {
            Role::updateOrCreate(['name' => $role], [
                'name'       => $role,
                'guard_name' => 'web'
            ]);
        }

        /*****   Assign All Permissions To Admin Role.    *****/
        $adminRole = Role::where('name', 'admin')->first();
        $adminRole->syncPermissions(Permission::all());
    }
}
