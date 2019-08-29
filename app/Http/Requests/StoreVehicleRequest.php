<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleRequest extends FormRequest
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
            'model_id' => 'required|integer',
            'fleet_nr' => 'required|min:3|max:10|unique:vehicles,' .$this->id,
            'reg_nr' => 'required|min:3|max:10|unique:vehicles,' .$this->id,
            'engine_nr' => 'required|min:5|max:50',
            'vin_nr' => 'required|min:5|max:50',
            'operating_license_nr' => 'required|min:5|max:50',
            'model_year' => 'sometimes',
            'operating_license_issue_date' => 'sometimes',
            'operating_license_expiry_date' => 'sometimes',
        ];
    }
}
