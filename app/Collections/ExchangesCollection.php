<?php


namespace App\Collections;


use App\Models\Exchange;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class ExchangesCollection {
    public static function collection(Request $request) {

        $defaultSort = '-created_at';

        $defaultSelect = [
            'id',
            'student_id',
            'old_school_id',
            'new_school_id',
            'reason',
            'confirmed_at',
            'scope',
            'created_at'
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
        $school = auth('school')->user();
        $query = QueryBuilder::for(Exchange::class)
            ->select($defaultSelect)
            ->allowedFilters($allowedFilters)
            ->allowedSorts($allowedSorts)
            ->defaultSort($defaultSort)
            ->with('student')
            ->with('oldSchool')
            ->with('newSchool');
        if ($school) {
            $query->where('new_school_id', $school->id);
        }
        return $query->paginate($perPage);
    }
}
