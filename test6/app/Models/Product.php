<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'base_cost',
        'base_price',
        'category_id',
        'supplier_id',
        'notes',
        // Agrega aquí cualquier otro atributo que desees permitir en asignación en masa
    ];
}

