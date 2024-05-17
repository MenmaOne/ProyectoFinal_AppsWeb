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
    Schema::create('suppliers_logs', function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedBigInteger('supplier_id');
        $table->string('action') ->comment('Accion que se realizó');
        $table->string('notes', 1024)->nullable()->comment('Notas');
        $table->boolean('is_active')->default(1)->comment('Muestra si la fila está activa');
        $table->integer('created_by')->unsigned()->nullable()->comment('Usuario que creó');
        $table->integer('updated_by')->unsigned()->nullable()->comment('Último usuario que modificó');
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
        Schema::dropIfExists('suppliers_logs');
    }
};
