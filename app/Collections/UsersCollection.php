<?php


namespace App\Collections;


use App\Models\School;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class UsersCollection {
    public static function collection(Request $request) {

        $defaultSort = '-created_at';

        $defaultSelect = [
            'id',
            'name',
            'addressable',
            'job',
            'phone',
            'email',
            'password',
            'created_at',
            'updated_at',
        ];

        $allowedFilters = [
            'id',
            'name',
            'addressable',
            'job',
            'phone',
            'email',
        ];

        $allowedSorts = [
            'id',
            'name',
            'addressable',
            'job',
            'phone',
            'email',
        ];

        $perPage = $request->limit  ? $request->limit : 100;

        return QueryBuilder::for(School::class)
            ->select($defaultSelect)
            ->allowedFilters($allowedFilters)
            ->allowedSorts($allowedSorts)
            ->defaultSort($defaultSort)
            ->with('addressable')
            ->paginate($perPage);
    }
}
