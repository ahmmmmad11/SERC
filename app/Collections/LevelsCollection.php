<?php


namespace App\Collections;


use App\Models\Level;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class LevelsCollection
{
    public static function collection (Request $request) {

        $defaultSort = '-created_at';

        $defaultSelect = [
            'id',
            'name',
            'grade',
            'created_at',
            'updated_at',
        ];

        $allowedFilters = [
            'id',
            'name',
            'grade'
        ];

        $allowedSorts = [
            'updated_at',
            'created_at',
            'grade',
        ];

        $perPage = $request->limit  ? $request->limit : 100;

        return QueryBuilder::for(Level::class)
            ->select($defaultSelect)
            ->allowedFilters($allowedFilters)
            ->allowedSorts($allowedSorts)
            ->defaultSort($defaultSort)
            ->with('subjects.subject')
            ->paginate($perPage);
    }
}
