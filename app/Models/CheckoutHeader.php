<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckoutHeader extends Model
{
    protected $table ="checkout_headers";
    protected $primaryKey = "id_checkout";

    protected $fillable =[
        'checkout_date','users_id','firstname','lastname','email','address','address2'
    ];

    static function tambah_checkout($user,$firstname,$lastname,$email,$address,$address2){
        $data= CheckoutHeader::create([
            "users_id"=>$user,
            "firstname"=>$firstname,
            "lastname"=>$lastname,
            "email"=>$email,
            "address"=>$address,
            "address2"=>$address2,
            "checkout_date"=> date("Y-m-d"),
        ]);

        return $data->id_checkout;
    }


}
