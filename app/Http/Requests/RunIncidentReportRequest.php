<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RunIncidentReportRequest extends FormRequest
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
            'layout' => 'required|numeric|min:0|max:2',
            'output' => 'required|numeric|min:0|max:1',
            'status' => 'required|numeric|min:0|max:2',
            'type_id' => 'required|integer',
            'area_id' => 'required|numeric|min:0',
            'vehicle_id' => 'required|numeric|min:0',
            'period_from' => 'required|date',
            'period_to' => 'required|date',
        ];
    }
}
