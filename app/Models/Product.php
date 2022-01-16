<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ="products";
    protected $primaryKey = "id";

    protected $fillable = [
        'nama_produk','gambar_produk','deskripsi_produk','harga',
    ]; 

    static function list_produk(){
        $data = Product::all();
        return $data;
    }
}
