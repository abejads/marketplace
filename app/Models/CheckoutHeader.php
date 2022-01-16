<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckoutHeader extends Model
{
    protected $table ="checkout_headers";
    protected $primaryKey = "id_checkout";

    protected $fillable =[
        'checkout_date'
    ];

    static function tambah_checkout(){
        $data= CheckoutHeader::create([
            "checkout_date"=> date("Y-m-d"),
        ]);

        return $data->id_checkout;
    }


}
