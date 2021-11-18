<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateTeacherRequest extends FormRequest {
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
            'name' => ['required', 'string', 'max:121'],
            'email' => ['required', 'email', 'unique:teachers'],
            'phone' => ['required', 'numeric'],
            'gender' => ['required', Rule::in(['male', 'female'])],
            'address' => ['nullable', 'string'],
            'grade' => ['required', Rule::in(['basic', 'middle', 'secondary'])],
            'degree' => ['nullable', 'string'],
            'specialization' => ['nullable', 'string', 'max:121'],
            'started_at' => ['required', 'date'],
            'attrs' => ['nullable', 'string'],
            'school_id' => ['required', 'exists:schools,id']
        ];
    }
}
