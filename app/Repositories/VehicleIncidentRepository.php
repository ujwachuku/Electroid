<?php


namespace App\Repositories;


use App\VehicleIncident;
use Illuminate\Support\Facades\Auth;

class VehicleIncidentRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model = new VehicleIncident();
        $this->order_by_field = 'name';
    }

    private function getNewReferenceCode()
    {
        $incrementedIncidentCount = (int)$this->model->whereDate('created_at', today())->count() + 1;
        return (string)date('Ymd') . '/' . $incrementedIncidentCount;
    }

    public function store($request, $incident)
    {
        if($incident->id === null) {
            $incident->code = $this->getNewReferenceCode();
        }

        $incident->type_id = $request->type_id;
        $incident->area_id = $request->area_id;
        $incident->vehicle_id = $request->vehicle_id;
        $incident->team_id = $request->team_id;
        $incident->bay_id = $request->bay_id;
        $incident->pax_impact_id = $request->pax_impact_id;
        $incident->description = $request->description;
        $incident->action = $request->action;
        $incident->driven_by = $request->driven_by;
        $incident->action_by = $request->action_by;
        $incident->attended_by = $request->attended_by;
        $incident->reported_by = $request->reported_by;
        $incident->reported_at = $request->reported_at;
        $incident->action_at = $request->action_at;
        $incident->attended_at = $request->attended_at;
        $incident->service_date = $request->service_date;

        $incident->user_id = Auth::user()->id;

        return $incident->save();
    }

    public function clone($incident)
    {
        $cloned = $incident->replicate();
        $cloned->code = null;
        return $cloned;
    }
}
