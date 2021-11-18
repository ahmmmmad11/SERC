<?php


namespace App\Collections;


use App\Models\Subject;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class SubjectsCollection {
    public static function collection(Request $request) {
        $school = auth('school')->user();
        $query = QueryBuilder::for(Subject::class);
        if ($school) {
            $query->where('grade', $school->id);
        }
        return $query->get();
    }
}
