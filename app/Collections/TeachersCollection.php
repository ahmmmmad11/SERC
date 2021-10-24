<?php


namespace App\Collections;


use App\Models\Teacher;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class TeachersCollection
{
    public static function collection (Request $request) {

        $defaultSort = '-created_at';

        $defaultSelect = [
            'id',
            'name',
            'email',
            'phone',
            'gender',
            'address',
            'level',
            'degree',
            'specialization',
            'started_at',
            'attrs',
            'school_id',
            'created_at',
            'updated_at',
        ];

        $allowedFilters = [
            'id',
            'name',
            'email',
            'phone',
            'gender',
            'address',
            'level',
            'degree',
            'specialization',
            'started_at',
            'attrs',
            'school_id'
        ];

        $allowedSorts = [
            'name',
            'email',
            'phone',
            'gender',
            'address',
            'level',
            'degree',
            'specialization',
            'started_at',
            'attrs',
            'school_id'
        ];

        $perPage = $request->limit  ? $request->limit : 100;

        return QueryBuilder::for(Teacher::class)
            ->select($defaultSelect)
            ->allowedFilters($allowedFilters)
            ->allowedSorts($allowedSorts)
            ->defaultSort($defaultSort)
            ->with('school')
            ->paginate($perPage);
    }
}
