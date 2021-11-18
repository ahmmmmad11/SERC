<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exchange extends Model {
    use HasFactory;

    protected $fillable = [
        'student_id',
        'old_school_id',
        'new_school_id',
        'reason',
        'confirmed_at',
        'scope'
    ];

    protected $casts = [

        'created_at' => 'datetime:Y-m-d',
        'confirmed_at' => 'datetime:Y-m-d',

    ];

    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function oldSchool() {
        return $this->belongsTo(School::class, 'old_school_id');
    }

    public function newSchool() {
        return $this->belongsTo(School::class, 'new_school_id');
    }
}
