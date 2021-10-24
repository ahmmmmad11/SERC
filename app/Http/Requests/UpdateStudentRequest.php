<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStudentRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:121'],
            'mother_name' => ['required', 'string', 'max:121'],
            'address' => ['required', 'string', 'max:121'],
            'grade' => ['required', Rule::in(['basic', 'middle', 'secondary'])],
            'started_at' => ['required', 'date'],
            'level_id' => ['required', 'exists:levels,id'],
            'school_id' => ['required', 'exists:schools,id'],
        ];
    }
}
