<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSchoolRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'administrative_unit_id'    => ['required', 'exists:administrative_units,id'],
            'name'                      => ['required', 'string'],
            'type'                      => ['required', Rule::in(['public', 'private'])],
            'gender'                    => ['required', Rule::in(['males', 'females', 'mixed'])],
            'grade'                     => ['required', Rule::in(['basic', 'middle', 'secondary'])],
            'established_at'            => ['nullable', 'date'],
            'status'                    => ['nullable', 'boolean'],
        ];
    }
}
