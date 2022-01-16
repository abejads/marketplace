<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckoutDetail extends Model
{
    protected $table ="checkout_details";
    protected $primaryKey = "id_checkout_detail";

    protected $fillable =[

        'id_checkout','products_id','total'


    ];

    static function tambah_checkout_detail($products_id,$id_checkout,$total){
        //dd($id_checkout);
        CheckoutDetail::create([
            
            "products_id"=>$products_id,
            "id_checkout"=>$id_checkout,
            "total"=>$total,

        ]);
    }
}
