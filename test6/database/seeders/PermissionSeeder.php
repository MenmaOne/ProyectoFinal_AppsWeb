<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\InventoryFunction;
use App\Models\Module;
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $adminUser = User::findOrFail(1);
        $fun1 = InventoryFunction::findOrFail(1);
        $fun2 = InventoryFunction::findOrFail(2);
        $fun3 = InventoryFunction::findOrFail(3);
        $fun4 = InventoryFunction::findOrFail(4);
        $fun5 = InventoryFunction::findOrFail(5);
        $fun6 = InventoryFunction::findOrFail(6);
        $fun7 = InventoryFunction::findOrFail(7);
        $fun8 = InventoryFunction::findOrFail(8);
        $fun9 = InventoryFunction::findOrFail(9);
        $fun10 = InventoryFunction::findOrFail(10);
        $fun11 = InventoryFunction::findOrFail(11);
        $fun12 = InventoryFunction::findOrFail(12);
        $fun13 = InventoryFunction::findOrFail(13);
        $fun14 = InventoryFunction::findOrFail(14);
        $fun15 = InventoryFunction::findOrFail(15);
        $fun16 = InventoryFunction::findOrFail(16);
        $fun17 = InventoryFunction::findOrFail(17);
        $fun18 = InventoryFunction::findOrFail(18);
        $fun19 = InventoryFunction::findOrFail(19);
        $fun20 = InventoryFunction::findOrFail(20);
        $fun21 = InventoryFunction::findOrFail(21);
        $fun22 = InventoryFunction::findOrFail(22);
        $fun23 = InventoryFunction::findOrFail(23);
        $fun24 = InventoryFunction::findOrFail(24);
        $fun25 = InventoryFunction::findOrFail(25);
        $fun26 = InventoryFunction::findOrFail(26);
        $fun27 = InventoryFunction::findOrFail(27);
        $fun28 = InventoryFunction::findOrFail(28);
        $fun29 = InventoryFunction::findOrFail(29);
        $fun30 = InventoryFunction::findOrFail(30);
        $fun31 = InventoryFunction::findOrFail(31);
        $fun32 = InventoryFunction::findOrFail(32);
        $fun33 = InventoryFunction::findOrFail(33);
        $fun34 = InventoryFunction::findOrFail(34);
        $fun35 = InventoryFunction::findOrFail(35);
        $fun36 = InventoryFunction::findOrFail(36);
        $fun37 = InventoryFunction::findOrFail(37);
        $fun38 = InventoryFunction::findOrFail(38);
        $fun39 = InventoryFunction::findOrFail(39);
        $fun40 = InventoryFunction::findOrFail(40);
        $fun41 = InventoryFunction::findOrFail(41);
        $fun83 = InventoryFunction::findOrFail(83);
        $fun84 = InventoryFunction::findOrFail(84);
        $fun85 = InventoryFunction::findOrFail(85);
        $fun86 = InventoryFunction::findOrFail(86);

        $mod1 = Module::findOrFail(1);
        $mod2 = Module::findOrFail(2);
        $mod3 = Module::findOrFail(3);
        $mod4 = Module::findOrFail(4);
        $mod5 = Module::findOrFail(5);
        $mod6 = Module::findOrFail(6);
        $mod7 = Module::findOrFail(7);


        Permission::create([
            'module_id' => $mod1->id,
            'function_id' => $fun1->id,
            'notes' => 'Permiso para ' . $fun1->name . ' en el módulo ' . $mod1->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);
        
        Permission::create([
            'module_id' => $mod1->id,
            'function_id' => $fun2->id,
            'notes' => 'Permiso para ' . $fun2->name . ' en el módulo ' . $mod1->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod1->id,
            'function_id' => $fun3->id,
            'notes' => 'Permiso para ' . $fun3->name . ' en el módulo ' . $mod1->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod1->id,
            'function_id' => $fun4->id,
            'notes' => 'Permiso para ' . $fun4->name . ' en el módulo ' . $mod1->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod1->id,
            'function_id' => $fun5->id,
            'notes' => 'Permiso para ' . $fun5->name . ' en el módulo ' . $mod1->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod1->id,
            'function_id' => $fun6->id,
            'notes' => 'Permiso para ' . $fun6->name . ' en el módulo ' . $mod1->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod1->id,
            'function_id' => $fun7->id,
            'notes' => 'Permiso para ' . $fun7->name . ' en el módulo ' . $mod1->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod1->id,
            'function_id' => $fun8->id,
            'notes' => 'Permiso para ' . $fun8->name . ' en el módulo ' . $mod1->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod1->id,
            'function_id' => $fun9->id,
            'notes' => 'Permiso para ' . $fun9->name . ' en el módulo ' . $mod1->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod1->id,
            'function_id' => $fun10->id,
            'notes' => 'Permiso para ' . $fun10->name . ' en el módulo ' . $mod1->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod1->id,
            'function_id' => $fun1->id,
            'notes' => 'Permiso para ' . $fun11->name . ' en el módulo ' . $mod1->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);


        Permission::create([
            'module_id' => $mod1->id,
            'function_id' => $fun32->id,
            'notes' => 'Permiso para ' . $fun32->name . ' en el módulo ' . $mod1->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod1->id,
            'function_id' => $fun33->id,
            'notes' => 'Permiso para ' . $fun33->name . ' en el módulo ' . $mod1->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod1->id,
            'function_id' => $fun34->id,
            'notes' => 'Permiso para ' . $fun34->name . ' en el módulo ' . $mod1->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod1->id,
            'function_id' => $fun35->id,
            'notes' => 'Permiso para ' . $fun35->name . ' en el módulo ' . $mod1->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod7->id,
            'function_id' => $fun12->id,
            'notes' => 'Permiso para ' . $fun12->name . ' en el módulo ' . $mod7->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod7->id,
            'function_id' => $fun13->id,
            'notes' => 'Permiso para ' . $fun13->name . ' en el módulo ' . $mod7->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod7->id,
            'function_id' => $fun14->id,
            'notes' => 'Permiso para ' . $fun14->name . ' en el módulo ' . $mod7->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod7->id,
            'function_id' => $fun15->id,
            'notes' => 'Permiso para ' . $fun15->name . ' en el módulo ' . $mod7->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod2->id,
            'function_id' => $fun16->id,
            'notes' => 'Permiso para ' . $fun16->name . ' en el módulo ' . $mod2->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod2->id,
            'function_id' => $fun17->id,
            'notes' => 'Permiso para ' . $fun17->name . ' en el módulo ' . $mod2->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod2->id,
            'function_id' => $fun18->id,
            'notes' => 'Permiso para ' . $fun18->name . ' en el módulo ' . $mod2->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod2->id,
            'function_id' => $fun19->id,
            'notes' => 'Permiso para ' . $fun19->name . ' en el módulo ' . $mod2->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod3->id,
            'function_id' => $fun20->id,
            'notes' => 'Permiso para ' . $fun20->name . ' en el módulo ' . $mod3->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod3->id,
            'function_id' => $fun21->id,
            'notes' => 'Permiso para ' . $fun21->name . ' en el módulo ' . $mod3->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod3->id,
            'function_id' => $fun22->id,
            'notes' => 'Permiso para ' . $fun22->name . ' en el módulo ' . $mod3->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod3->id,
            'function_id' => $fun23->id,
            'notes' => 'Permiso para ' . $fun23->name . ' en el módulo ' . $mod3->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod3->id,
            'function_id' => $fun24->id,
            'notes' => 'Permiso para ' . $fun24->name . ' en el módulo ' . $mod3->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod3->id,
            'function_id' => $fun25->id,
            'notes' => 'Permiso para ' . $fun25->name . ' en el módulo ' . $mod3->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod3->id,
            'function_id' => $fun26->id,
            'notes' => 'Permiso para ' . $fun26->name . ' en el módulo ' . $mod3->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod3->id,
            'function_id' => $fun27->id,
            'notes' => 'Permiso para ' . $fun27->name . ' en el módulo ' . $mod3->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod3->id,
            'function_id' => $fun36->id,
            'notes' => 'Permiso para ' . $fun36->name . ' en el módulo ' . $mod3->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod3->id,
            'function_id' => $fun37->id,
            'notes' => 'Permiso para ' . $fun37->name . ' en el módulo ' . $mod3->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod3->id,
            'function_id' => $fun38->id,
            'notes' => 'Permiso para ' . $fun38->name . ' en el módulo ' . $mod3->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod3->id,
            'function_id' => $fun37->id,
            'notes' => 'Permiso para ' . $fun37->name . ' en el módulo ' . $mod3->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod4->id,
            'function_id' => $fun28->id,
            'notes' => 'Permiso para ' . $fun28->name . ' en el módulo ' . $mod4->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod4->id,
            'function_id' => $fun29->id,
            'notes' => 'Permiso para ' . $fun29->name . ' en el módulo ' . $mod4->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod4->id,
            'function_id' => $fun30->id,
            'notes' => 'Permiso para ' . $fun30->name . ' en el módulo ' . $mod4->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod4->id,
            'function_id' => $fun31->id,
            'notes' => 'Permiso para ' . $fun31->name . ' en el módulo ' . $mod4->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod4->id,
            'function_id' => $fun39->id,
            'notes' => 'Permiso para ' . $fun39->name . ' en el módulo ' . $mod4->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod6->id,
            'function_id' => $fun40->id,
            'notes' => 'Permiso para ' . $fun40->name . ' en el módulo ' . $mod6->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod6->id,
            'function_id' => $fun41->id,
            'notes' => 'Permiso para ' . $fun41->name . ' en el módulo ' . $mod6->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod4->id,
            'function_id' => $fun83->id,
            'notes' => 'Permiso para ' . $fun83->name . ' en el módulo ' . $mod4->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod4->id,
            'function_id' => $fun84->id,
            'notes' => 'Permiso para ' . $fun84->name . ' en el módulo ' . $mod4->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod4->id,
            'function_id' => $fun85->id,
            'notes' => 'Permiso para ' . $fun85->name . ' en el módulo ' . $mod4->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

        Permission::create([
            'module_id' => $mod4->id,
            'function_id' => $fun86->id,
            'notes' => 'Permiso para ' . $fun86->name . ' en el módulo ' . $mod4->name,
            'is_active' => true,
            "created_at" => now(),
            "updated_at" => now(),
            "created_by" => $adminUser->id,
            "updated_by" => $adminUser->id,
        ]);

    }
}
