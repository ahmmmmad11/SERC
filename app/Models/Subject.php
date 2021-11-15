<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'grade',
    ];

    public function results () {
        return $this->hasMany(Result::class);
    }

    public function level () {
        return $this->hasMany(LevelSubject::class);
    }
}
