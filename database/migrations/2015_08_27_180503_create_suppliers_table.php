<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('companyname');
            $table->string('contactffirstname');
            $table->string('contactlastname');
            $table->string('contacttitle');
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('state');
            $table->string('postalcode');
            $table->string('country');
            $table->string('phone');
            $table->string('fax');
            $table->string('email');
            $table->string('url');
            $table->string('paymentmethods');
            $table->string('discounttype');
            $table->string('typegoods');
            $table->string('notes');
            $table->string('discountavailable');
            $table->string('currentorder');
            $table->string('logo');
            $table->string('customerid');
            $table->string('sizeurl');
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
        Schema::drop('suppliers');
    }
}
