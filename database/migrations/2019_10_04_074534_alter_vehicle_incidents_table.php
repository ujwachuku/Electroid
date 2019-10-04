<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterVehicleIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('vehicle_incidents');
        Schema::create('vehicle_incidents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique();
            $table->unsignedInteger('type_id');
            $table->unsignedInteger('area_id');
            $table->unsignedInteger('vehicle_id');
            $table->unsignedInteger('team_id')->nullable();
            $table->unsignedInteger('bay_id')->nullable();
            $table->unsignedInteger('pax_impact_id');
            $table->unsignedInteger('status_id')->nullable();
            $table->unsignedInteger('user_id');
            $table->string('description');
            $table->string('action')->nullable();
            $table->string('driven_by');
            $table->string('action_by')->nullable();
            $table->string('attended_by')->nullable();
            $table->string('reported_by')->nullable();
            $table->dateTime('reported_at')->nullable();
            $table->dateTime('action_at')->nullable();
            $table->dateTime('attended_at')->nullable();
            $table->date('service_date')->nullable();
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
