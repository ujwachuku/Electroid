<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleIncidentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type_id' => 'required|integer',
            'area_id' => 'required|integer',
            'vehicle_id' => 'required|integer',
            'team_id' => 'sometimes|integer',
            'bay_id' => 'sometimes|integer',
            'pax_impact_id' => 'sometimes|integer',
            'description' => 'required|max:400',
            'action' => 'sometimes|max:400',
            'driven_by' => 'required|max:20',
            'action_by' => 'sometimes|max:20',
            'attended_by' => 'sometimes|max:20',
            'reported_by' => 'sometimes|max:20',
            'reported_at' => 'required',
            'action_at' => 'sometimes',
            'attended_at' => 'sometimes',
            'service_date' => 'sometimes'
        ];
    }
}
