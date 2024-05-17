<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Bernardo',
            'last_name' => 'López',
            'email' => 'bernardolopezortiz4@gmail.com',
            'password' => Hash::make('contraseña'),
            'notes' => 'Usuario administrador',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
        ]);

    }
}
