<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Administrador',
            'notes' => 'Usuario que puede tiene todos los permisos',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
        ]);
        
    }
}
