<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_incidents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique();
            $table->unsignedInteger('type_id');
            $table->unsignedInteger('area_id');
            $table->unsignedInteger('vehicle_id');
            $table->unsignedInteger('team_id');
            $table->unsignedInteger('bay_id');
            $table->unsignedInteger('pax_impact_id');
            $table->unsignedInteger('status_id');
            $table->unsignedInteger('user_id');
            $table->string('description');
            $table->string('action');
            $table->string('driven_by');
            $table->string('action_by');
            $table->string('attended_by');
            $table->string('reported_by');
            $table->dateTime('reported_at');
            $table->dateTime('action_at');
            $table->dateTime('attended_at');
            $table->date('service_date');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_incidents');
    }
}
