<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\InventoryMovement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventoryMovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUser = User::findOrFail(1);

        InventoryMovement::create([
            'name' => 'Movimiento 1 (Entrada de producto)',
            'notes' => 'Entrada de Iphone 14 Pro',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryMovement::create([
            'name' => 'Movimiento 2 (Entrada de producto)',
            'notes' => 'Entrada de Camisa de algodón',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryMovement::create([
            'name' => 'Movimiento 3 (Entrada de producto)',
            'notes' => 'Robot aspirador inteligente',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryMovement::create([
            'name' => 'Movimiento 4 (Entrada de producto)',
            'notes' => 'Entrada de Raqueta de tenis',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryMovement::create([
            'name' => 'Movimiento 5 (Entrada de producto)',
            'notes' => 'Entrada de Set de Lego Star Wars',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryMovement::create([
            'name' => 'Movimiento 6 (Entrada de producto)',
            'notes' => 'Entrada de Set de películas Jurasic Park Blu-ray',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryMovement::create([
            'name' => 'Movimiento 6 (Entrada de producto)',
            'notes' => 'Entrada de Revista de entretenimiento mensual',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryMovement::create([
            'name' => 'Movimiento 6 (Entrada de producto)',
            'notes' => 'Entrada de Pantalones vaqueros ajustados',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);
    }
}
