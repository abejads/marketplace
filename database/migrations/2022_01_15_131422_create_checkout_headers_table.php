<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkout_headers', function (Blueprint $table) {
            $table->id("id_checkout");
            $table->date("checkout_date");
            $table->foreignId("users_id");
            $table->string("firstname");
            $table->string("lastname");
            $table->string("email");
            $table->string("address");
            $table->string("address2")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checkout_headers');
    }
}