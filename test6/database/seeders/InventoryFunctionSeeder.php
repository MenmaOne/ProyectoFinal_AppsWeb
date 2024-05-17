<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\InventoryFunction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventoryFunctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUser = User::findOrFail(1);

        InventoryFunction::create([            
            "name" => "Login",            
            "notes" => "Inicia sesión en el sistema",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "LogOut",            
            "notes" => "Cierra la sesión",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Update user",            
            "notes" => "Actualiza la información del usuario",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Delete user",            
            "notes" => "Elimina un usuario",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Recovery",            
            "notes" => "Recupera la contraseña",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Register",            
            "notes" => "Registra una nueva cuenta",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        //Admin

        InventoryFunction::create([            
            "name" => "Admin Create user",            
            "notes" => "Crea un nuevo usuario",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Admin Register user",            
            "notes" => "Registra una nueva cuenta de usuario",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Admin Update user",            
            "notes" => "Actualiza la información de un usuario",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Admin Delete user",            
            "notes" => "Elimina un usuario del sistema",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Admin Query user",            
            "notes" => "Consulta información sobre usuarios",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Create role",            
            "notes" => "Crea un nuevo rol de usuario",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Register role",            
            "notes" => "Registra un nuevo rol de usuario",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Update role",            
            "notes" => "Actualiza la información de un rol de usuario",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Delete role",            
            "notes" => "Elimina un rol de usuario del sistema",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Create permission",            
            "notes" => "Crea un nuevo permiso de usuario",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Register permission",            
            "notes" => "Registra una nueva cuenta de permiso de usuario",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Update permission",            
            "notes" => "Actualiza la información de un permiso de usuario",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Delete permission",            
            "notes" => "Elimina un permiso de usuario del sistema",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Create product",            
            "notes" => "Crea un nuevo producto en el sistema",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Register product",            
            "notes" => "Registra un nuevo producto en el sistema",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Update product",            
            "notes" => "Actualiza la información de un producto en el sistema",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Delete product",            
            "notes" => "Elimina un producto del sistema",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Create product by supplier",            
            "notes" => "Crea un nuevo producto en el sistema, asociado a un proveedor específico",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Register product by supplier",            
            "notes" => "Registra un nuevo producto en el sistema, especificando el proveedor correspondiente",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Update product by supplier",            
            "notes" => "Actualiza la información de un producto en el sistema, incluyendo detalles relacionados con el proveedor asociado",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Delete product by supplier",            
            "notes" => "Elimina un producto del sistema, considerando su relación con el proveedor asociado",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Create supplier",            
            "notes" => "Crea un nuevo proveedor en el sistema",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Register supplier",            
            "notes" => "Registra un nuevo proveedor en el sistema",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Update supplier",            
            "notes" => "Actualiza la información de un proveedor en el sistema",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Delete supplier",            
            "notes" => "Elimina un proveedor del sistema",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Sales",            
            "notes" => "Realiza ventas de productos",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Buying",            
            "notes" => "Realiza compras de productos a proveedores",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Refound",            
            "notes" => "Procesa reembolsos o devoluciones de productos",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Waste",            
            "notes" => "Administra el desperdicio de productos",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Find product by name",            
            "notes" => "Busca un producto por su nombre",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Find product by supplier",            
            "notes" => "Busca productos por proveedor",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Find product by category",            
            "notes" => "Busca productos por categoría",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Find supplier by name",            
            "notes" => "Busca proveedores por nombre",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Log inventory",            
            "notes" => "Registra bitacoras de inventario",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Read log inventory",            
            "notes" => "Lee bitacoras de inventario",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Create Category",            
            "notes" => "Crea una nuevo categoria",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Register Category",            
            "notes" => "Registra una nueva categoria",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Update Category",            
            "notes" => "Actualiza la información de una categoria",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        InventoryFunction::create([            
            "name" => "Delete Category",            
            "notes" => "Elimina una categoria del sistema",
            "is_active" => 1,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);
    }
}
