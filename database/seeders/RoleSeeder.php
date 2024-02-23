<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'Student']);
        $role = Role::create(['name' => 'Registrar']);
        $role = Role::create(['name' => 'Super Admin']);
        $role = Role::create(['name' => 'Faculty']);
        $role = Role::create(['name' => 'Finance']);
        $role = Role::create(['name' => 'Library']);
        $role = Role::create(['name' => 'QA']);
    }
}
