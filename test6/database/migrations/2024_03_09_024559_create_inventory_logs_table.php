<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inventory_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inventory_id')->unsigned()->comment('Identificador del inventario relacionado');
			$table->foreign('inventory_id')->references('id')->on('inventories');
            $table->integer('amount')->comment("Cantidad disponible en el inventario");
            $table->integer('delta_amount')->comment("Cambio en la cantidad de productos");
            $table->integer('movement_inventory_id')->unsigned()->comment('Identificador del movimiento de inventario relacionado');
			$table->foreign('movement_inventory_id')->references('id')->on('inventory_movements');
            $table->integer('product_id')->unsigned()->comment('Identificador del producto relacionado');
			$table->foreign('product_id')->references('id')->on('products');

			$table->string('notes', 1024)->nullable()->comment('Notas');
			$table->boolean('is_active')->default(1)->comment('Muestra si la fila está activa');
			$table->integer('created_by')->unsigned()->nullable()->comment('Usuario que creó');
			$table->foreign('created_by')->references('id')->on('users');
			$table->integer('updated_by')->unsigned()->nullable()->comment('Último usuario que modificó');
			$table->foreign('updated_by')->references('id')->on('users');
			$table->timestamp('created_at', 0)->useCurrent()->comment('Fecha de creación');
			$table->timestamp('updated_at', 0)->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))
				->comment('Última fecha de modificación');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_logs');
    }
};
