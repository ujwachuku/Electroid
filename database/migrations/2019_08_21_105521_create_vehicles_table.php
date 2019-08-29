<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fleet_nr')->unique();
            $table->string('reg_nr')->unique();
            $table->string('engine_nr')->nullable();
            $table->string('vin_nr')->nullable();
            $table->date('model_year')->nullable();
            $table->string('operating_license_nr')->nullable();
            $table->date('operating_license_issue_date')->nullable();
            $table->date('operating_license_expiry_date')->nullable();
            $table->unsignedInteger('type_id');
            $table->unsignedInteger('model_id');
            //$table->unsignedInteger('user_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('type_id')->references('id')->on('vehicle_types');
            $table->foreign('model_id')->references('id')->on('vehicle_models');
            //$table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
