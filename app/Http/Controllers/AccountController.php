<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class AccountController extends Controller
{
    public function index(){
        $carts = Cart::All()->where('users_id', auth()->user()->id);
        $incart = $carts->count();
        return view('/account',
            [
                "title" => "Akun saya",
                "incart"=>$incart,
                "accounts" => auth()->user()
            ]
        );
    }
}
