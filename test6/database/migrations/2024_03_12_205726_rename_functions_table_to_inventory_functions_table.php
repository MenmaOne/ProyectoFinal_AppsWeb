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
        Schema::table('functions', function (Blueprint $table) {
            Schema::rename('functions', 'inventory_functions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('functions', function (Blueprint $table) {
            Schema::rename('inventory_functions', 'functions');
        });
    }
};
