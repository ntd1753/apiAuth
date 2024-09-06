<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Tạo các vai trò
        Role::create(['name' => 'agency']);
        Role::create(['name' => 'manager']);
        Role::create(['name' => 'user']);
    }
}

