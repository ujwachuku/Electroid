@csrf
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h5 class="mt-2 border-bottom pb-2 text-primary">Classification</h5>
<div class="row">
    <div class="col-md-6">
        <incident-type-select-component
            value="{{ old('type_id', $incident->type ? $incident->type->id : '') }}">
        </incident-type-select-component>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="area_id">Area</label>
            <select name="area_id" id="area_id" class="form-control form-control-chosen">
                @foreach($areas as $id => $name)
                    <option value="{{ $id }}" @if(($id === $incident->area_id) ? 'selected' : '') @endif>{{ $name }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="driven_by">Driver</label>
            <input type="text" name="driven_by" id="driven_by" value="{{ old('driven_by', $incident->driven_by) }}"
                   class="form-control" placeholder="Name and Surname">
            @error('driven_by')
            <div class="text-danger">*{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="vehicle_id">Vehicle</label>
            <select name="vehicle_id" id="vehicle_id" class="form-control form-control-chosen">
                @foreach($vehicles as $id => $fleet_nr)
                    <option value="{{ $id }}" @if(($id === $incident->vehicle_id) ? 'selected' : '') @endif>{{ $fleet_nr }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="reported_by">Passenger Impacted</label>
            <select name="pax_impact_id" id="pax_impact_id" class="form-control">
                <option value="99" {{ old('pax_impact_id', $incident->pax_impact_id) != 1 ? 'selected' : '' }}>No</option>
                <option value="1" {{ old('pax_impact_id', $incident->pax_impact_id) == 1 ? 'selected' : '' }}>Yes</option>
            </select>
            @error('pax_impact_id')
            <div class="text-danger">*{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<h5 class="mt-4 border-bottom pb-2 text-primary">The Incident</h5>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="reported_by">Reported By</label>
            <input type="text" name="reported_by" id="reported_by" value="{{ old('reported_by', $incident->reported_by) }}"
                   class="form-control" placeholder="Name and Surname">
            @error('reported_by')
            <div class="text-danger">*{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="reported_at">Reported At</label>
            <input type="text" name="reported_at" id="reported_at" value="{{ old('reported_at', $incident->reported_at) }}"
                   class="form-control datetime-picker" placeholder="Date and Time">
            @error('reported_at')
            <div class="text-danger">*{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text"
                      name="description"
                      id="description"
                      class="form-control"
                      placeholder="Description" rows="5">{{ old('description', $incident->description) }}</textarea>
            @error('description')
            <div class="text-danger">*{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="attended_by">Attended By</label>
            <input type="text" name="attended_by" id="attended_by" value="{{ old('attended_by', $incident->attended_by) }}"
                   class="form-control" placeholder="Name and Surname">
            @error('attended_by')
            <div class="text-danger">*{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="attended_at">Attended At</label>
            <input type="text" name="attended_at" id="attended_at" value="{{ old('attended_at', $incident->attended_at) }}"
                   class="form-control datetime-picker" placeholder="Date and Time">
            @error('attended_at')
            <div class="text-danger">*{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>
<h5 class="mt-4 border-bottom pb-2 text-primary">Technical Notes</h5>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="attended_by">Action By</label>
            <input type="text" name="action_by" id="action_by" value="{{ old('action_by', $incident->action_by) }}"
                   class="form-control" placeholder="Name and Surname">
            @error('action_by')
            <div class="text-danger">*{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="action_at">Action At</label>
            <input type="text" name="action_at" id="action_at" value="{{ old('action_at', $incident->action_at) }}"
                   class="form-control datetime-picker" placeholder="Date and Time">
            @error('action_at')
            <div class="text-danger">*{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="action">Action Performed</label>
            <textarea type="text"
                      name="action"
                      id="action"
                      class="form-control"
                      placeholder="Action Performed" rows="5">{{ old('action', $incident->action) }}</textarea>
            @error('action')
            <div class="text-danger">*{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="service_date">Vehicle's Last Service</label>
            <input type="text" name="service_date" id="service_date" value="{{ old('service_date', $incident->service_date) }}"
                   class="form-control datetime-picker" placeholder="Date">
            @error('service_date')
            <div class="text-danger">*{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <service-team-select-component
            value="{{ old('team_id', $incident->team_id ? $incident->team_id : '') }}"></service-team-select-component>
    </div>
    <div class="col-md-4">
        <service-bay-select-component
            value="{{ old('bay_id', $incident->bay_id ? $incident->bay_id : '') }}"></service-bay-select-component>
    </div>
</div>
