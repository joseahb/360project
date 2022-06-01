<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pro_id');
            $table->string('name');
            $table->string('street');
            $table->string('locality')->nullable();
            $table->string('town');
            $table->string('county')->nullable();
            $table->string('postcode')->nullable();
            $table->string('custom_location')->nullable();
            $table->string('display');
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
        Schema::dropIfExists('property_addresses');
    }
}
