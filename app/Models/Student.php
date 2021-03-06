<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'mother_name',
        'address',
        'grade',
        'gender',
        'started_at',
        'level_id',
        'school_id',
    ];

    public function school () {
        return $this->belongsTo(School::class);
    }

    public function results () {
        return $this->hasMany(Result::class);
    }

    public function level () {
        return $this->belongsTo(Level::class);
    }
}
