<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cart;
use App\Models\CheckoutHeader;
use App\Models\CheckoutDetail;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index(){
        $cart = Cart::All()->where('users_id', auth()->user()->id);
        $incart = $cart->count();
        return view('checkout', 
        ["title"=> "Pembayaran",
        "incart"=>$incart
        ]
    );
    }

    function buy(){
        
        
        $cart = DB::table("carts")->where('users_id', auth()->user()->id)->get();
        $id_checkout = CheckoutHeader::tambah_checkout();
        foreach($cart as $ct){
          
            $id_item=$ct->products_id;
     
            $total=$ct->jumlah;
            CheckoutDetail::tambah_checkout_detail($id_item,$id_checkout,$total);
        }
         return redirect("/");
    }
}
