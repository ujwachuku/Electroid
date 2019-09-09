<?php

namespace App\Http\Controllers;

use App\Http\Requests\RunIncidentReportRequest;
use App\Http\Requests\StoreVehicleIncidentRequest;
use App\Repositories\VehicleIncidentRepository;
use App\Vehicle;
use App\VehicleIncident;
use App\VehicleIncidentArea;
use App\VehicleIncidentType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class VehicleIncidentController extends Controller
{
    private $repository;

    public function __construct()
    {
        $this->repository = new VehicleIncidentRepository();
    }

    public function apiAll()
    {
        return VehicleIncident::orderBy('name')->get();
    }

    public function index()
    {
        $incidents = $this->repository->paginate();
        return view('incident.index', compact('incidents'));
    }

    public function create(VehicleIncident $incident)
    {
        $data = [
            'incident' => $incident,
            'areas' => VehicleIncidentArea::orderBy('name')->pluck('name', 'id'),
            'vehicles' => Vehicle::orderBy('fleet_nr')->pluck('fleet_nr', 'id')
        ];

        return view('incident.create', $data);
    }

    public function store(StoreVehicleIncidentRequest $request, VehicleIncident $incident)
    {
        $this->repository->store($request, $incident);
        return redirect()->route('incident.index')->with('success', 'A new vehicle incident was created');
    }

    public function show(VehicleIncident $incident)
    {
        return view('incident.show', compact('incident'));
    }

    public function edit(VehicleIncident $incident)
    {
        return view('incident.edit', compact('incident'));
    }

    public function update(StoreVehicleIncidentRequest $request, VehicleIncident $incident)
    {
        $this->repository->store($request, $incident);
        if($request->close === '1')
            $this->repository->close($incident);
        return redirect()->route('incident.show', $incident)->with('success', 'The vehicle incident was updated');
    }

    public function delete(VehicleIncident $incident)
    {
        $this->repository->delete($incident);
        return redirect()->route('incident.index')->with('success', 'The vehicle incident was deleted');
    }

    public function clone(VehicleIncident $incident)
    {
        $clone = $this->repository->clone($incident);
        return view('incident.create', ['incident' => $clone]);
    }

    public function close(VehicleIncident $incident)
    {
        $this->repository->close($incident);
        return redirect()->route('incident.index')->with('success', 'The vehicle incident was closed');
    }

    public function reopen(VehicleIncident $incident)
    {
        $clone = $this->repository->reopen($incident);
        return redirect()->route('incident.show', $incident)->with('success', 'The vehicle incident was reopened');
    }

    public function report()
    {
        //dd(VehicleIncidentType::orderBy('name')->pluck('name', 'id'));

        return view('incident.report', [
            'layouts' => collect(['Summary', 'Detailed', 'Job Card']),
            'output' => collect(['PDF', 'CSV']),
            'status' => collect(['All', 'Open', 'Closed']),
            'types' => VehicleIncidentType::orderBy('name')->pluck('name', 'id'),
            'areas' => VehicleIncidentArea::orderBy('name')->pluck('name', 'id'),
            'vehicles' => Vehicle::orderBy('fleet_nr')->pluck('fleet_nr', 'id'),
            'carbon' => new Carbon()
        ]);
    }

    public function runrpt(RunIncidentReportRequest $request)
    {
        $incidents = $this->repository->filter($request);

        switch ($request->layout) {
            case 1:
                $layout = 'detail';
                $orientation = 'portrait';
                break;
            case 2:
                $layout = 'jobcard';
                $orientation = 'portrait';
                break;
            default:
                $layout = 'summary';
                $orientation = 'landscape';
                break;
        }

        $pdf = PDF::setPaper('a4', $orientation)->loadview('incident.pdf.' . $layout, [
            'period' => $request->period_from . ' to ' . $request->period_to,
            'incidents' => $incidents,
        ]);

        return $pdf->stream('IncidentSummaryReport.pdf');
    }
}
