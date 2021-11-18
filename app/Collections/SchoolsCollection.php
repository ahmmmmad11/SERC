<?php


namespace App\Collections;


use App\Models\School;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class SchoolsCollection {
    public static function collection(Request $request) {

        $defaultSort = '-created_at';

        $defaultSelect = [
            'id',
            'administrative_unit_id',
            'name',
            'type',
            'gender',
            'grade',
            'established_at',
            'api_key',
            'api_secret',
            'created_at',
            'updated_at',
        ];

        $allowedFilters = [
            'id',
            'administrative_unit_id',
            'name',
            'type',
            'gender',
            'grade',
            'established_at',
        ];

        $allowedSorts = [
            'administrative_unit_id',
            'name',
            'type',
            'gender',
            'grade',
            'established_at',
        ];

        $perPage = $request->limit  ? $request->limit : 100;

        return QueryBuilder::for(School::class)
            ->select($defaultSelect)
            ->allowedFilters($allowedFilters)
            ->allowedSorts($allowedSorts)
            ->defaultSort($defaultSort)
            ->with('administrativeUnit')
            ->paginate($perPage);
    }
}
