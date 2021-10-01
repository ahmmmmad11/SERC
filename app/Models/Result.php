<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
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

    public function school () {
        return $this->belongsTo(School::class);
    }

    public function student () {
        return $this->belongsTo(Student::class);
    }

    public function teacher () {
        return $this->belongsTo(Teacher::class);
    }

    public function subject () {
        return $this->belongsTo(Subject::class);
    }

    public function level () {
        return $this->belongsTo(Level::class);
    }
}
