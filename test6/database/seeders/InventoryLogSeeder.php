<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Inventory;
use App\Models\InventoryMovements;
use App\Models\Product;
use App\Models\InventoryLog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventoryLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUser = User::findOrFail(1);
        $inv1 = Inventory::findOrFail(1);
        $inv2 = Inventory::findOrFail(2);
        $inv3 = Inventory::findOrFail(3);
        $inv4 = Inventory::findOrFail(4);
        $inv5 = Inventory::findOrFail(5);
        $inv6 = Inventory::findOrFail(6);
        $inv7 = Inventory::findOrFail(7);
        $inv8 = Inventory::findOrFail(8);
        $invM1 = Inventory::findOrFail(1);
        $invM2 = Inventory::findOrFail(2);
        $invM3 = Inventory::findOrFail(3);
        $invM4 = Inventory::findOrFail(4);
        $invM5 = Inventory::findOrFail(5);
        $invM6 = Inventory::findOrFail(6);
        $invM7 = Inventory::findOrFail(7);
        $invM8 = Inventory::findOrFail(8);
        $P1 = Product::findOrFail(1);
        $P8 = Product::findOrFail(8);
        $P14 = Product::findOrFail(14);
        $P19 = Product::findOrFail(19);
        $P22 = Product::findOrFail(22);
        $P29 = Product::findOrFail(29);
        $P33 = Product::findOrFail(33);
        $P35 = Product::findOrFail(35);


        InventoryLog::create([
            'inventory_id' => $inv1->id,
            'amount' => 5, // Cantidad inicial
            'delta_amount' => 25, // suma en la cantidad
            'movement_inventory_id' => $invM2->id,
            'product_id' => $P1->id,
            'notes' => 'Entraron 25 unidades nuevas del producto',
            'is_active' => true,
            'created_by' => $adminUser->id,
            'updated_by' => $adminUser->id,
        ]);

        InventoryLog::create([
            'inventory_id' => $inv2->id,
            'amount' => 5, // Cantidad inicial
            'delta_amount' => 25, // suma en la cantidad
            'movement_inventory_id' => $invM8->id,
            'product_id' => $P8->id,
            'notes' => 'Entraron 25 unidades nuevas del producto',
            'is_active' => true,
            'created_by' => $adminUser->id,
            'updated_by' => $adminUser->id,
        ]);

        InventoryLog::create([
            'inventory_id' => $inv3->id,
            'amount' => 5, // Cantidad inicial
            'delta_amount' => 25, // suma en la cantidad
            'movement_inventory_id' => $invM1->id,
            'product_id' => $P14->id,
            'notes' => 'Entraron 25 unidades nuevas del producto',
            'is_active' => true,
            'created_by' => $adminUser->id,
            'updated_by' => $adminUser->id,
        ]);

        InventoryLog::create([
            'inventory_id' => $inv4->id,
            'amount' => 5, // Cantidad inicial
            'delta_amount' => 25, // suma en la cantidad
            'movement_inventory_id' => $invM3->id,
            'product_id' => $P19->id,
            'notes' => 'Entraron 25 unidades nuevas del producto',
            'is_active' => true,
            'created_by' => $adminUser->id,
            'updated_by' => $adminUser->id,
        ]);

        InventoryLog::create([
            'inventory_id' => $inv5->id,
            'amount' => 5, // Cantidad inicial
            'delta_amount' => 25, // suma en la cantidad
            'movement_inventory_id' => $invM4->id,
            'product_id' => $P22->id,
            'notes' => 'Entraron 25 unidades nuevas del producto',
            'is_active' => true,
            'created_by' => $adminUser->id,
            'updated_by' => $adminUser->id,
        ]);

        InventoryLog::create([
            'inventory_id' => $inv6->id,
            'amount' => 5, // Cantidad inicial
            'delta_amount' => 25, // suma en la cantidad
            'movement_inventory_id' => $invM5->id,
            'product_id' => $P29->id,
            'notes' => 'Entraron 25 unidades nuevas del producto',
            'is_active' => true,
            'created_by' => $adminUser->id,
            'updated_by' => $adminUser->id,
        ]);

        InventoryLog::create([
            'inventory_id' => $inv7->id,
            'amount' => 5, // Cantidad inicial
            'delta_amount' => 25, // suma en la cantidad
            'movement_inventory_id' => $invM6->id,
            'product_id' => $P33->id,
            'notes' => 'Entraron 25 unidades nuevas del producto',
            'is_active' => true,
            'created_by' => $adminUser->id,
            'updated_by' => $adminUser->id,
        ]);

        InventoryLog::create([
            'inventory_id' => $inv8->id,
            'amount' => 5, // Cantidad inicial
            'delta_amount' => 25, // suma en la cantidad
            'movement_inventory_id' => $invM7->id,
            'product_id' => $P35->id,
            'notes' => 'Entraron 25 unidades nuevas del producto',
            'is_active' => true,
            'created_by' => $adminUser->id,
            'updated_by' => $adminUser->id,
        ]);
    }
}
