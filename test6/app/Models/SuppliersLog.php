<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuppliersLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_id',
        'action',
        'notes',
        // Otros campos que desees incluir en el registro de bitácora
    ];

    // Relación con el modelo Supplier
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
