<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use function PHPUnit\Framework\isNull;

class CartController extends Controller
{
    public function index() {

        $carts = Cart::All()->where('users_id', auth()->user()->id);
        $products = array();
        $incart = $carts->count();
        foreach($carts as $cart)
        {
            // dd
            $products[] = Product::All()->find($cart->products_id);
            // dd($cart->product_id);
        }

        return view('cart', 
            [
                "title"=> "Keranjang",
                "carts" => $carts,
                "incart"=>$incart,
                "products" => $products
            ]
        );
    }

    // public function update(Request $request) {
        
    //     $validate = $request->validate([
    //         'products_id' => 'required|min:1',
    //         'jumlah' => 'required|numeric|min:1'
    //         ]
    //     );
        
    //     dd();

    // }

    public function add(Request $request) {
        $request['jumlah'] = (is_null($request['jumlah']) || $request['jumlah'] < 1) ? "1" : $request['jumlah'];

        $validate = $request->validate([
            'products_id' => 'required|numeric|min:1',
            'jumlah' => 'required|numeric|min:1'
            ]
        );

        // try {
            
        // }

        $jumlah_db = Cart::All()->where('users_id', auth()->user()->id)->where('products_id', $validate['products_id'])->first();
        $jumlah_total = (!is_null($jumlah_db)) ? $jumlah_db->jumlah + $validate['jumlah'] : $validate['jumlah'];
        
        $validate['users_id'] = auth()->user()->id;
        $validate['jumlah'] = $jumlah_total;

        if(Cart::updateOrCreate(
            ["users_id" => $validate['users_id'], 
            "products_id" => $validate['products_id']],
            ["jumlah" => $validate['jumlah']]
        )) {
            return redirect()->intended('/cart');
        }

        return back()->with("cart_error", "Produk gagal ditambahkan");
    }
}
