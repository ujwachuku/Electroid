@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <div class="mt-2 h4">Incident Report</div>
                    </div>
                    <form action="{{ route('incident.runrpt') }}" method="post" target="_blank">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="layout">Layout</label>
                                        <select name="layout" id="layout" class="form-control">
                                            @foreach($layouts as $id => $name)
                                                <option value="{{ $id }}" {{ $id === 0 ? 'selected' : '' }}>{{ $name }}</option>
                                            @endforeach
                                        </select>
                                        @error('layout')<div class="text-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="type_id">Type</label>
                                        <select name="type_id" id="type_id" class="form-control">
                                            <option value="0">All Types</option>
                                            @foreach($types as $id => $name)
                                                <option value="{{ $id }}">{{ $name }}</option>
                                            @endforeach
                                        </select>
                                        @error('type_id')<div class="text-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="type_id">Area</label>
                                        <select name="area_id" id="area_id" class="form-control">
                                            <option value="0">All Areas</option>
                                            @foreach($areas as $id => $name)
                                                <option value="{{ $id }}">{{ $name }}</option>
                                            @endforeach
                                        </select>
                                        @error('area_id')<div class="text-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="type_id">Vehicle</label>
                                        <select name="vehicle_id" id="vehicle_id" class="form-control">
                                            <option value="0">All Vehicles</option>
                                            @foreach($vehicles as $id => $name)
                                                <option value="{{ $id }}">{{ $name }}</option>
                                            @endforeach
                                        </select>
                                        @error('vehicle_id')<div class="text-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="period_from">Period From</label>
                                        <input type="date"
                                               name="period_from"
                                               class="form-control"
                                               value="{{ $carbon->today()->subMonth()->format('Y-m-01') }}"
                                               max="{{ $carbon->today()->format('Y-m-d') }}">
                                        @error('period_from')<div class="text-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="period_to">Period To</label>
                                        <input type="date"
                                               name="period_to"
                                               class="form-control"
                                               value="{{ $carbon->today()->format('Y-m-d') }}"
                                               max="{{ $carbon->today()->format('Y-m-d') }}">
                                        @error('period_to')<div class="text-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="output">Output Format</label>
                                        <select name="output" id="output" class="form-control">
                                            @foreach($output as $id => $name)
                                                <option value="{{ $id }}" {{ $id === 0 ? 'selected' : '' }}>{{ $name }}</option>
                                            @endforeach
                                        </select>
                                        @error('output')<div class="text-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            @foreach($status as $id => $name)
                                                <option value="{{ $id }}" {{ $id === 0 ? 'selected' : '' }}>{{ $name }}</option>
                                            @endforeach
                                        </select>
                                        @error('status')<div class="text-danger">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">Run Report</button>
                            <form-cancel href="{{ route('incident.index') }}"></form-cancel>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
