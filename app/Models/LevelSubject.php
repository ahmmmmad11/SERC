<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LevelSubject extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'level_id',
        'subject_id',
        'full_degree'
    ];

    public function level () {
        return $this->belongsTo(Level::class);
    }

    public function subject () {
        return $this->belongsTo(Subject::class);
    }
}
