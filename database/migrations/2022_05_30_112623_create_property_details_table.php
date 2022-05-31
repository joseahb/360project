<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('agents')->nullable();
            $table->bigInteger('software');
            $table->string('price');
            $table->string('rentalfees')->nullable();
            $table->string('lettingsfee')->nullable();
            $table->string('rm_qualifier');
            $table->string('available');
            $table->string('uploaded');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('easting');
            $table->string('northing');
            $table->string('web_status');
            $table->string('custom_status')->nullable();
            $table->string('comm_rent')->nullable();
            $table->string('premium')->nullable();
            $table->string('service_charge')->nullable();
            $table->string('rateable_value')->nullable();
            $table->string('type');
            $table->string('furnished');
            $table->string('rm_type');
            $table->string('let_bond');
            $table->string('rm_let_type_id');
            $table->string('bedrooms');
            $table->string('receptions');
            $table->string('bathrooms');
            $table->string('userfield1')->nullable();
            $table->string('userfield2')->nullable();
            $table->string('newbuild');
            $table->string('groundrent');
            $table->string('commission')->nullable();
            $table->string('tenure');

            $table->string('solddate');
            $table->string('leaseend');
            $table->string('instructed');
            $table->string('letdate');
            $table->string('soldprice');
            $table->string('garden');
            $table->string('parking');
            $table->string('paragraphs');
            $table->string('area');
            $table->string('description');
            $table->string('hip');
            $table->string('bullets');
            $table->string('userfeatures')->nullable();
            $table->string('adverts')->nullable();
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
        Schema::dropIfExists('property_details');
    }
}
