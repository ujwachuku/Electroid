<?php


namespace App\Repositories;


use App\Vehicle;

class VehicleRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new Vehicle();
        $this->order_by_field = 'fleet_nr';
    }

    public function store($request, $vehicle)
    {
        $vehicle->type_id = $request->type_id;
        $vehicle->model_id = $request->model_id;
        $vehicle->fleet_nr = $request->fleet_nr;
        $vehicle->reg_nr = $request->reg_nr;
        $vehicle->engine_nr = $request->engine_nr;
        $vehicle->vin_nr = $request->vin_nr;
        $vehicle->model_year = $request->model_year;
        $vehicle->operating_license_nr = $request->operating_license_nr;
        $vehicle->operating_license_issue_date = $request->operating_license_issue_date;
        $vehicle->operating_license_expiry_date = $request->operating_license_expiry_date;
        return $vehicle->save();
    }
}
