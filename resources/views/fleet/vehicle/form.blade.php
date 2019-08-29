@csrf
<div class="row">
    <div class="col-md-6">
        <form-input
            name="fleet_nr"
            title="Fleet Nr"
            placeholder="Fleet Nr"
            value="{{ old('fleet_nr', $vehicle->fleet_nr) }}"
            error="{{ $errors->first('fleet_nr') }}">
        </form-input>
    </div>
    <div class="col-md-6">
        <form-input
            name="reg_nr"
            title="Reg Nr"
            placeholder="Reg Nr"
            value="{{ old('reg_nr', $vehicle->reg_nr) }}"
            error="{{ $errors->first('reg_nr') }}">
        </form-input>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <vehicle-type-select-component
            value="{{ old('type_id', $vehicle->type ? $vehicle->type->id : '') }}">
        </vehicle-type-select-component>
    </div>
    <div class="col-md-4">
        <vehicle-model-select-component
            value="{{ old('model_id', $vehicle->model ? $vehicle->model->id : '') }}">
        </vehicle-model-select-component>
    </div>
    <div class="col-md-4">
        <form-input
            name="model_year"
            title="Year"
            placeholder="Year"
            value="{{ old('model_year', $vehicle->model_year) }}"
            error="{{ $errors->first('model_year') }}">
        </form-input>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <form-input
            name="engine_nr"
            title="Engine Nr"
            placeholder="Engine Nr"
            value="{{ old('engine_nr', $vehicle->engine_nr) }}"
            error="{{ $errors->first('engine_nr') }}">
        </form-input>
    </div>
    <div class="col-md-6">
        <form-input
            name="vin_nr"
            title="VIN Nr"
            placeholder="VIN Nr"
            value="{{ old('vin_nr', $vehicle->vin_nr) }}"
            error="{{ $errors->first('vin_nr') }}">
        </form-input>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <form-input
            name="operating_license_nr"
            title="Operating Licence Nr"
            placeholder="Operating Licence Nr"
            value="{{ old('operating_license_nr', $vehicle->operating_license_nr) }}"
            error="{{ $errors->first('operating_license_nr') }}">
        </form-input>
    </div>
    <div class="col-md-4">
        <form-input
            name="operating_license_issue_date"
            title="Issue Date"
            placeholder="Issue Date"
            value="{{ old('operating_license_issue_date', $vehicle->operating_license_issue_date) }}"
            error="{{ $errors->first('operating_license_issue_date') }}">
        </form-input>
    </div>
    <div class="col-md-4">
        <form-input
            name="operating_license_expiry_date"
            title="Expiry Date"
            placeholder="Expiry Date"
            value="{{ old('operating_license_expiry_date', $vehicle->operating_license_expiry_date) }}"
            error="{{ $errors->first('operating_license_expiry_date') }}">
        </form-input>
    </div>
</div>
