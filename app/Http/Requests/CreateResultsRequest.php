<?php

namespace App\Http\Requests;

use App\Models\LevelSubject;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateResultsRequest extends FormRequest
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
        $max_mark = LevelSubject::where('subject_id', $this->request->subject_id)
            ->where('level_id', $this->request->level_id)
            ->first()
            ->full_degree;

        return [
            'teacher_id' => ['required', 'exists:teachers,id'],
            'subject_id' => ['required', 'exists:subjects,id'],
            'level_id' => ['required', 'exists:levels,id'],
            'academic_year' => ['required'],
            'term' => ['required', Rule::in(['first', 'last'])],
            'results' => ['required', 'array'],
            'results.*.mark' => ['required', 'numeric', 'min:0', 'max:'.$max_mark],
            'results.*.student_id' => ['required', 'exists:students,id'],
        ];
    }
}
