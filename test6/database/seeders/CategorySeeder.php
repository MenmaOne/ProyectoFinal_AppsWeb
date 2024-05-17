<?php

namespace Database\Seeders;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUser = User::findOrFail(1);

        Category::create([
            'name' => 'Ropa',
            'notes' => 'Categoría para prendas de vestir.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Category::create([
            'name' => 'Electrónicos',
            'notes' => 'Categoría para productos electrónicos.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Category::create([
            'name' => 'Hogar y jardín',
            'notes' => 'Categoría para productos relacionados con el hogar y el jardín.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Category::create([
            'name' => 'Deportes y aire libre',
            'notes' => 'Categoría para artículos deportivos y actividades al aire libre.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Category::create([
            'name' => 'Juguetes y juegos',
            'notes' => 'Categoría para juguetes y juegos para todas las edades.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Category::create([
            'name' => 'Libros y medios',
            'notes' => 'Categoría para libros, películas y otros medios de entretenimiento.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);
    }
}
