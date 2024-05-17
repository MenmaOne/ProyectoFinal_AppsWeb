<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buying extends Model
{
    use HasFactory;
    
        protected $fillable = [
            'product_id', 
            'amount', 
            'total', 
            'payment_type', 
            'notes'
        ];
    
        public function product()
        {
            return $this->belongsTo(Product::class);
        }
    
}
