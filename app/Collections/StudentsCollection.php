<?php


namespace App\Collections;


use App\Models\Student;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class StudentsCollection
{
    public static function collection (Request $request) {

        $defaultSort = '-created_at';

        $defaultSelect = [
            'id',
            'name',
            'mother_name',
            'address',
            'grade',
            'started_at',
            'level_id',
            'school_id',
            'created_at',
            'updated_at',
        ];

        $allowedFilters = [
            'id',
            'name',
            'mother_name',
            'address',
            'grade',
            'started_at',
            'level_id',
            'school_id',
        ];

        $allowedSorts = [
            'updated_at',
            'created_at',
            'name',
            'mother_name',
            'address',
            'grade',
            'started_at',
            'level_id',
            'school_id',
        ];

        $perPage = $request->limit  ? $request->limit : 100;

        return QueryBuilder::for(Student::class)
            ->select($defaultSelect)
            ->allowedFilters($allowedFilters)
            ->allowedSorts($allowedSorts)
            ->defaultSort($defaultSort)
            ->with('school')
            ->with('level')
            ->paginate($perPage);
    }
}
