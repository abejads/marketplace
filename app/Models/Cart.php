<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table ="carts";
    protected $primaryKey = "id";

    protected $fillable = [
        'products_id',
        'users_id',
        'jumlah',
    ];


    // public function product()
    // {
    //     return $this->belongsTo(Product::class);
    // }
}
