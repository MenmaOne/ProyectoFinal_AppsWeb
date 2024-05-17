<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $adminUser = User::findOrFail(1);

        Module::create([
            'name' => 'Administracion de usuarios',
            'notes' => 'Administracion de los usuarios',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Module::create([
            'name' => 'Administracion de permisos',
            'notes' => 'Administracion de los permisos',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Module::create([
            'name' => 'Gestion de Productos',
            'notes' => 'Administracion de los Productos',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Module::create([
            'name' => 'Gestion de Categorias',
            'notes' => 'Administracion de las Categorias',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Module::create([
            'name' => 'Gestión de Proveedores',
            'notes' => 'Administracion de los Proveedores',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Module::create([
            'name' => 'Gestión de Inventarios',
            'notes' => 'Administracion de los Inventarios',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Module::create([
            'name' => 'Administracion de Roles',
            'notes' => 'Administracion de los Roles',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);
    }
}
