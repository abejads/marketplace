<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    public function index()
    {
        $product= Product::list_produk();
        if (Auth::check()){
            $cart = Cart::All()->where('users_id', auth()->user()->id);
            $incart = $cart->count();
        }
        else{
            $incart = 0;
        }
        
       
        return view('index',[
            "title"=>"",
            "incart"=>$incart
        ])->with("products",$product);
    }

    public function products()
    {
        if (Auth::check()){
            $cart = Cart::All()->where('users_id', auth()->user()->id);
            $incart = $cart->count();
        }
        else{
            $incart = 0;
        }
        return view('products',
            [
                "title" => "Daftar Produk",
                "products" => Product::all(),
                "incart"=>$incart
            ]
        );
    }

    public function details(Product $product)
    {
        if (Auth::check()){
            $cart = Cart::All()->where('users_id', auth()->user()->id);
            $incart = $cart->count();
        }
        else{
            $incart = 0;
        }
        return view('product_details',
            [
                "title" => "Detail Produk",
                "product" => $product,
                "incart"=>$incart

            ]
        );
    }
}
