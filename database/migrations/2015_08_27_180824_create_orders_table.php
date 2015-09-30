<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customerid'); //Foreign Key
            $table->string('ordernumber');
            $table->string('paymentid'); //Foreign Key
            $table->string('orderdate');
            $table->string('shipdate');
            $table->string('requiredate');
            $table->string('shipperid');
            $table->string('freight');
            $table->string('salestax');
            $table->string('transactionstatus');
            $table->string('errorloc');
            $table->string('errormsg');
            $table->string('fulfilled');
            $table->string('deleted');
            $table->string('paid');
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
        Schema::drop('orders');
    }
}
