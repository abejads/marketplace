<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index()
    {
        return view('index', 
            [
                "title"=> "",
                "products" => Product::all()->take(4)
            ]
        );
    }

    public function products()
    {
        return view('products',
            [
                "title" => "Daftar Produk",
                "products" => Product::all()
            ]
        );
    }

    public function details(Product $product)
    {
        return view('product_details',
            [
                "title" => "Detail Produk",
                "product" => $product

            ]
        );
    }
}
