<?php

namespace Database\Seeders;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUser = User::findOrFail(1);

        Supplier::create([
            'name' => 'Algodonia',
            'address' => 'Calle Alta #1252, CDMX, México',
            'contact_phone' => '8182068017',
            'notes' => 'Proveedor de Ropa',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Supplier::create([
            'name' => 'Electronic Shop',
            'address' => 'Calle Maria .G #1257, CDMX, México',
            'contact_phone' => '1234558765',
            'notes' => 'Proveedor de electronicos',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Supplier::create([
            'name' => 'Green gardens',
            'address' => 'Calle Guadalupe #1456, CDMX, México',
            'contact_phone' => '8529463281',
            'notes' => 'Proveedor de Hogar y jardin',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);
        
        Supplier::create([
            'name' => 'Sport Shop',
            'address' => 'Calle Agua clara #1216, CDMX, México',
            'contact_phone' => '1574829638',
            'notes' => 'Proveedor de deportes',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Supplier::create([
            'name' => 'Toy´ssss',
            'address' => 'Calle Maria Morelos y P #1596, CDMX, México',
            'contact_phone' => '1234567895',
            'notes' => 'Proveedor de Juguetes y juegos',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Supplier::create([
            'name' => 'Book Store',
            'address' => 'Calle Pio X #1275, CDMX, México',
            'contact_phone' => '5486795134',
            'notes' => 'Proveedor de Libros y medios',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);
        
    }
}
