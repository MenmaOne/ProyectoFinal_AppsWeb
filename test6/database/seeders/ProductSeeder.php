<?php

namespace Database\Seeders;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUser = User::findOrFail(1);
        $category1 = Category::findOrFail(1);
        $category2 = Category::findOrFail(2);
        $category3 = Category::findOrFail(3);
        $category4 = Category::findOrFail(4);
        $category5 = Category::findOrFail(5);
        $category6 = Category::findOrFail(6);

        Product::create([
            'name' => 'Camisa de algodón',
            'description' => 'Camisa de manga larga hecha de algodón suave y cómodo.',
            'base_cost' => 199.9900,
            'base_price' => 299.9900,
            'category_id' => $category1->id,
            'notes' => 'Disponible en varios colores y tallas.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Product::create([
            'name' => 'Sudadera con capucha',
            'description' => 'Sudadera de algodón con capucha y bolsillo canguro en la parte delantera.',
            'base_cost' => 199.9900,
            'base_price' => 299.9900,
            'category_id' => $category1->id,
            'notes' => 'Ideal para uso casual.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Product::create([
            'name' => 'Pantalones vaqueros ajustados',
            'description' => 'Pantalones vaqueros de corte ajustado y diseño moderno.',
            'base_cost' => 149.9900,
            'base_price' => 399.9900,
            'category_id' => $category1->id,
            'notes' => 'Disponible en varios colores y tallas.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Product::create([
            'name' => 'Vestido de verano',
            'description' => 'Vestido ligero y fresco para los días calurosos de verano.',
            'base_cost' => 399.9900,
            'base_price' => 749.9900,
            'category_id' => $category1->id,
            'notes' => 'Estampado floral disponible en varias tallas.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Product::create([
            'name' => 'Camiseta básica de manga corta',
            'description' => 'Camiseta básica de algodón en varios colores para combinar con cualquier conjunto.',
            'base_cost' => 59.9900,
            'base_price' => 149.9900,
            'category_id' => $category1->id,
            'notes' => 'Cómoda y versátil para uso diario.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        // Electrónicos
        Product::create([
            'name' => 'Iphone 14 Pro',
            'description' => 'Teléfono móvil con pantalla táctil, cámara de alta resolución y conexión 4G.',
            'base_cost' => 8000.0000,
            'base_price' => 9999.0000,
            'category_id' =>$category2->id,
            'notes' => 'Marca: Apple.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Product::create([
            'name' => 'Samsung Galaxy A70',
            'description' => 'Teléfono inteligente Android con pantalla HD y cámara de alta resolución.',
            'base_cost' => 4999.9900,
            'base_price' => 7999.9900,
            'category_id' => $category2->id,
            'notes' => 'Memoria RAM de 8 GB y almacenamiento interno de 128 GB.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Product::create([
            'name' => 'MacBook Air',
            'description' => 'Portátil ultradelgado con procesador de última generación y pantalla Full HD.',
            'base_cost' => 7999.9900,
            'base_price' => 9999.9900,
            'category_id' => $category2->id,
            'notes' => 'Peso ligero y diseño elegante para la movilidad.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Product::create([
            'name' => 'Televisor Samsung 4K HDR',
            'description' => 'Televisor 4K con tecnología HDR para una calidad de imagen excepcional.',
            'base_cost' => 5999.9900,
            'base_price' => 9999.9900,
            'category_id' => $category2->id,
            'notes' => 'Tamaño de pantalla de 55 pulgadas con sonido envolvente Dolby Atmos.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Product::create([
            'name' => 'Auriculares inalámbricos Xiaomi',
            'description' => 'Auriculares inalámbricos con cancelación de ruido y batería de larga duración.',
            'base_cost' => 499.9900,
            'base_price' => 799.9900,
            'category_id' => $category2->id,
            'notes' => 'Conexión Bluetooth y controles táctiles integrados.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        // Hogar y jardín
        Product::create([
            'name' => 'Juego de muebles de jardín',
            'description' => 'Conjunto de mesa y sillas de exterior fabricado en rattan sintético resistente a la intemperie.',
            'base_cost' => 6200.0000,
            'base_price' => 8500.0000,
            'category_id' => $category3->id,
            'notes' => 'Ideal para patio, terraza o jardín.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Product::create([
            'name' => 'Juego de cuchillos de cocina (Set 1)',
            'description' => 'Set de cuchillos de acero inoxidable con soporte de madera.',
            'base_cost' => 399.9900,
            'base_price' => 799.9900,
            'category_id' => $category3->id,
            'notes' => 'Incluye cuchillos de chef, filetear, pan, y pelar.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Product::create([
            'name' => 'Conjunto de muebles de jardín (Set 2)',
            'description' => 'Conjunto de muebles de exterior con mesa, sillas y sombrilla.',
            'base_cost' => 7999.9900,
            'base_price' => 9999.9900,
            'category_id' => $category3->id,
            'notes' => 'Fabricado en ratán resistente a la intemperie.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Product::create([
            'name' => 'Robot aspirador inteligente',
            'description' => 'Aspiradora robotizada con mapeo inteligente y control remoto por aplicación.',
            'base_cost' => 6999.9900,
            'base_price' => 9999.9900,
            'category_id' => $category3->id,
            'notes' => 'Sistema de limpieza autónomo con sensores de detección de obstáculos.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Product::create([
            'name' => 'Set de macetas decorativas',
            'description' => 'Conjunto de macetas de cerámica con diseños modernos y elegantes.',
            'base_cost' => 199.9900,
            'base_price' => 499.9900,
            'category_id' => $category3->id,
            'notes' => 'Ideales para plantas de interior y exterior.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        // Deportes y aire libre
        Product::create([
            'name' => 'Bicicleta de montaña',
            'description' => 'Bicicleta todo terreno con cuadro de aluminio y suspensión delantera.',
            'base_cost' => 7000.0000,
            'base_price' => 9500.0000,
            'category_id' =>$category4->id,
            'notes' => 'Marca: AdventureBike.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Product::create([
            'name' => 'Raqueta de tenis',
            'description' => 'Raqueta profesional de tenis con marco de fibra de carbono y tecnología anti vibración.',
            'base_cost' => 129.9900,
            'base_price' => 399.9900,
            'category_id' => $category4->id,
            'notes' => 'Incluye funda protectora.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Product::create([
            'name' => 'Tienda de campaña para 4 personas',
            'description' => 'Tienda de campaña resistente al agua y ventilada con capacidad para cuatro personas.',
            'base_cost' => 259.9900,
            'base_price' => 599.9900,
            'category_id' => $category4->id,
            'notes' => 'Fácil de montar y transportar.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Product::create([
            'name' => 'Tabla de paddle surf hinchable',
            'description' => 'Tabla de paddle surf inflable con remo ajustable y bolsa de transporte.',
            'base_cost' => 149.9900,
            'base_price' => 399.9900,
            'category_id' => $category4->id,
            'notes' => 'Ideal para principiantes y aguas tranquilas.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Product::create([
            'name' => 'Balón de fútbol',
            'description' => 'Balón oficial de fútbol de tamaño estándar con diseño clásico de paneles hexagonales y pentagonales.',
            'base_cost' => 129.9900,
            'base_price' => 259.9900,
            'category_id' => $category4->id,
            'notes' => 'Construido con materiales duraderos para un rendimiento óptimo en cualquier superficie.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);
        

        // Juguetes y juegos
        Product::create([
            'name' => 'Set de Lego clásico',
            'description' => 'Set de construcción de ladrillos de colores variados para crear cualquier cosa que imagines.',
            'base_cost' => 1799.9900,
            'base_price' => 1299.9900,
            'category_id' =>$category5->id,
            'notes' => 'Incluye más de 500 piezas.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Product::create([
            'name' => 'Rompecabezas de 1000 piezas',
            'description' => 'Rompecabezas desafiante de 1000 piezas con diseño de paisaje natural.',
            'base_cost' => 159.9900,
            'base_price' => 299.9900,
            'category_id' => $category5->id,
            'notes' => 'Ideal para horas de entretenimiento en familia o amigos.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);
        
        Product::create([
            'name' => 'Muñeca de colección Barbie',
            'description' => 'Muñeca de colección con ropa detallada y accesorios.',
            'base_cost' => 159.9900,
            'base_price' => 399.9900,
            'category_id' => $category5->id,
            'notes' => 'Edición limitada con detalles pintados a mano.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);
        
        Product::create([
            'name' => 'Set de Lego Star Wars',
            'description' => 'Set de bloques de construcción de plástico duradero para construir la estrella de la muerte.',
            'base_cost' => 4999.9900,
            'base_price' => 9999.9900,
            'category_id' => $category5->id,
            'notes' => 'Incluye una variedad de piezas y colores para estimular la creatividad.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);
        
        Product::create([
            'name' => 'Monopoly',
            'description' => 'Monopoly clásico.',
            'base_cost' => 199.9900,
            'base_price' => 449.9900,
            'category_id' => $category5->id,
            'notes' => 'Incluye tablero, fichas y reglas detalladas.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        // Libros y medios
        Product::create([
            'name' => 'Libro de cocina: Recetas saludables',
            'description' => 'Libro de recetas con platos saludables y deliciosos para todas las ocasiones.',
            'base_cost' => 199.9900,
            'base_price' => 99.9900,
            'category_id' =>$category6->id,
            'notes' => 'Autor: Chef Example.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Product::create([
            'name' => 'Libro de cocina internacional',
            'description' => 'Libro de recetas de cocina con platos de diferentes partes del mundo.',
            'base_cost' => 109.9900,
            'base_price' => 249.9900,
            'category_id' => $category6->id,
            'notes' => 'Incluye instrucciones paso a paso y fotografías de alta calidad.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);
        
        Product::create([
            'name' => 'Set de películas Jurasic Park Blu-ray',
            'description' => 'Colección de películas clásicas de Jurasic Park en formato Blu-ray.',
            'base_cost' => 149.9900,
            'base_price' => 499.9900,
            'category_id' => $category6->id,
            'notes' => 'Incluye la saga original',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);
        
        Product::create([
            'name' => 'Audiolibro de ficción popular',
            'description' => 'Audiolibro narrado de una novela de ficción popular del año.',
            'base_cost' => 109.9900,
            'base_price' => 349.9900,
            'category_id' => $category6->id,
            'notes' => 'Ideal para disfrutar durante viajes largos o tiempo libre.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);
        
        Product::create([
            'name' => 'Revista de entretenimiento mensual',
            'description' => 'Revista mensual que cubre noticias, críticas y entrevistas del mundo del entretenimiento.',
            'base_cost' => 49.9900,
            'base_price' => 109.9900,
            'category_id' => $category6->id,
            'notes' => 'Contenido variado que incluye cine, música, televisión y más.',
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);
        
    }
}
