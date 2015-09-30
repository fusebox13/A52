<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sku');
            $table->string('idsku');
            $table->string('vendorproductid');
            $table->string('productname');
            $table->string('productdescription');
            $table->string('supplierid');
            $table->string('categoryid');
            $table->string('quantityperunit');
            $table->string('unitprice');
            $table->string('msrp');
            $table->string('availablesizes');
            $table->string('availablecolors');
            $table->string('size');
            $table->string('color');
            $table->string('discount');
            $table->string('unitweight');
            $table->string('unitsinstock');
            $table->string('unitsonorder');
            $table->string('reorderlevel');
            $table->string('productavailable');
            $table->string('discountavailable');
            $table->string('currentorder');
            $table->string('picture');
            $table->string('ranking');
            $table->string('note');
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
        Schema::drop('products');
    }
}
