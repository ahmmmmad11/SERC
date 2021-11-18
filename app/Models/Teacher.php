<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model {
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'gender',
        'address',
        'grade',
        'degree',
        'specialization',
        'started_at',
        'attrs',
        'school_id'
    ];

    public function school() {
        return $this->belongsTo(School::class);
    }

    public function results() {
        return $this->hasMany(Result::class);
    }
}
