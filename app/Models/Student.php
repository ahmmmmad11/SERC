<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'mother_name',
        'address',
        'grade',
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
