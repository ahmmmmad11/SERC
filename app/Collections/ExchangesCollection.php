<?php


namespace App\Collections;


use App\Models\Exchange;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class ExchangesCollection
{
    public static function collection (Request $request) {

        $defaultSort = '-created_at';

        $defaultSelect = [
            'id',
            'student_id',
            'old_school_id',
            'new_school_id',
            'reason',
            'confirmed_at',
            'scope'
        ];

        $allowedFilters = [
            'id',
            'student_id',
            'old_school_id',
            'new_school_id',
            'reason',
            'confirmed_at',
            'scope'
        ];

        $allowedSorts = [
            'student_id',
            'old_school_id',
            'new_school_id',
            'confirmed_at',
            'scope'
        ];

        $perPage = $request->limit  ? $request->limit : 100;

        return QueryBuilder::for(Exchange::class)
            ->select($defaultSelect)
            ->allowedFilters($allowedFilters)
            ->allowedSorts($allowedSorts)
            ->defaultSort($defaultSort)
            ->with('student')
            ->with('oldSchool')
            ->with('newSchool')
            ->paginate($perPage);
    }
}
