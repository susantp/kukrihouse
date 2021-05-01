<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * "name": "Susant Paudel",
"street": "Lokanthali, Bhaktapur",
"city": "Kathmandu",
"state": "sdaf",
"country": "Nepal",
"phone": "+9779851040576",
"hidden-item-name": "EGKH- 12\" Blade World War II 'The Survival Alive' Kukri Full Tang with Brown Leather Sheath",
"hidden-item-quantity": "4",
         **/
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('phone');
            $table->string('hidden-item-name');
            $table->string('hidden-item-quantity');
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
        Schema::dropIfExists('orders');
    }
}
