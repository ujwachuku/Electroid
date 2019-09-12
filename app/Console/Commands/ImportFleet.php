<?php

namespace App\Console\Commands;

use App\Vehicle;
use App\VehicleMake;
use App\VehicleModel;
use App\VehicleType;
use Illuminate\Console\Command;

class ImportFleet extends Command
{
    protected $signature = 'fleet:import';

    protected $description = 'Import vehicles, makes and types from CSV file';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $filename = storage_path() . '/app/fleet.csv';
        $handle = fopen($filename, 'r');
        while (!feof($handle)) {
            $row = fgetcsv($handle, '1000', ';');

            $type_id = VehicleType::firstOrCreate(['name' => $row[3]])->id;
            $make_id = VehicleMake::firstOrCreate(['name' => $row[4]])->id;
            $model_id = VehicleModel::firstOrCreate(['name' => $row[5], 'make_id' => $make_id])->id;

            $vehicle = new Vehicle();
            $vehicle->fleet_nr = $row[0];
            $vehicle->reg_nr = $row[1];
            $vehicle->model_year = $row[2];
            $vehicle->type_id = $type_id;
            //$vehicle->make_id = $row[4]; // ??
            $vehicle->model_id = $model_id;
            //$vehicle->seats = $row[6];
            $vehicle->vin_nr = $row[7];
            $vehicle->engine_nr = $row[8];
            $vehicle->operating_license_nr = $row[9];
            $vehicle->operating_license_issue_date = $row[10];
            $vehicle->operating_license_expiry_date = $row[11];
            $vehicle->save();
        }
    }
}
