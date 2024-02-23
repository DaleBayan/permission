<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name'          => 'Jell',
            'email'         => 'jell@mcc.edu.ph',
            'created_at'    => now(),
            'password'      => '$2y$12$WlFxDeK0ip8V2SKKi9HujOfvs6YCMvLRW7DjulYeATMq0etOnixWO'
        ]);
        $user->assignRole('Super Admin');
    }
}
