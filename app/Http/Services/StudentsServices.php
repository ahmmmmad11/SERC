<?php


namespace App\Http\Services;


use App\Models\Student;

class StudentsServices {
    public static function studentSchool($id) {
        return Student::find($id)->school;
    }
}
