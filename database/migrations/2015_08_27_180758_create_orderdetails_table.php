<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderdetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('orderid');
            $table->string('productid');
            $table->string('ordernumber');
            $table->string('price');
            $table->string('quantity');
            $table->string('discount');
            $table->string('total');
            $table->string('idsku');
            $table->string('size');
            $table->string('color');
            $table->string('fulfilled');
            $table->string('shipdate');
            $table->string('billdate');
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
        Schema::drop('orderdetails');
    }
}
