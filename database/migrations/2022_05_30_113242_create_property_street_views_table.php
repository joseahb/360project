<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyStreetViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_street_views', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('prop_id');
            $table->string('pov_latitude');
            $table->string('pov_longitude');
            $table->string('pov_pitch');
            $table->string('pov_heading');
            $table->string('pov_zoom');
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
        Schema::dropIfExists('property_street_views');
    }
}
