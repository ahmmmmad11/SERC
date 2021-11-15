<?php


namespace App\Collections;


use App\Models\Result;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class ResultsCollection
{
    public static function collection (Request $request) {

        $defaultSort = '-created_at';

        $defaultSelect = [
            'id',
            'school_id',
            'student_id',
            'teacher_id',
            'subject_id',
            'mark',
            'term',
            'level_id',
            'academic_year',
            'administrative_unit_confirmation',
            'locality_confirmation',
            'state_confirmation',
            'federal_confirmation',
            'created_at',
            'updated_at',
        ];

        $allowedFilters = [
            'id',
            'school_id',
            'student_id',
            'teacher_id',
            'subject_id',
            'mark',
            'term',
            'level_id',
            'academic_year',
            'administrative_unit_confirmation',
            'locality_confirmation',
            'state_confirmation',
            'federal_confirmation'
        ];

        $allowedSorts = [
            'updated_at',
            'created_at',
            'school_id',
            'student_id',
            'teacher_id',
            'subject_id',
            'mark',
            'term',
            'level_id',
            'academic_year',
            'administrative_unit_confirmation',
            'locality_confirmation',
            'state_confirmation',
            'federal_confirmation'
        ];

        $perPage = $request->limit  ? $request->limit : 100;

        return QueryBuilder::for(Result::class)
            ->select($defaultSelect)
            ->allowedFilters($allowedFilters)
            ->allowedSorts($allowedSorts)
            ->defaultSort($defaultSort)
            ->with('school')
            ->with('level')
            ->with('student')
            ->with('subject')
            ->paginate($perPage);
    }
}
