<?php

namespace Database\Seeders;

use App\Models\Users\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run(): void
    {
        /*****   Create Super Admin User.   *****/
        $superAdmin = User::updateOrCreate(['email' => 'superadmin@erp.com'], [
            'name'      => 'Mr Superadmin',
            'email'     => 'superadmin@erp.com',
            'password'  => Hash::make('Admin*786')
        ]);

        /*****   Assign Super Admin Role.   *****/
        $superAdmin->assignRole('super admin');

        /*****   Create Admin User.   *****/
        $admin = User::updateOrCreate(['email' => 'admin@erp.com'], [
            'name'     => 'Mr Admin',
            'email'    => 'admin@erp.com',
            'password' => Hash::make('Admin*786')
        ]);

        /*****   Assign Admin Role.   *****/
        $admin->assignRole('admin');
    }
}
