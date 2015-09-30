<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('class');
            $table->string('room');
            $table->string('building');
            $table->string('address1');
            $table->string('address2');
            $table->string('city');
            $table->string('state');
            $table->string('postalcode');
            $table->string('country');
            $table->string('phone');
            $table->string('email');
            $table->string('voicemail');
            $table->string('password');
            $table->string('creditcard');
            $table->string('creditcardtypeid');
            $table->string('cardexpmo');
            $table->string('cardexpyr');
            $table->string('billingaddress');
            $table->string('billingcity');
            $table->string('billingregion');
            $table->string('billingpostalcode');
            $table->string('billingcountry');
            $table->string('shipeaddress');
            $table->string('shipcity');
            $table->string('shipregion');
            $table->string('shippostalcode');
            $table->string('shipcountry');
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
        Schema::drop('customers');
    }
}
