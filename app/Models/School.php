<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class School extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'administrative_unit_id',
        'name',
        'type',
        'gender',
        'level',
        'grade',
        'established_at',
        'api_key',
        'api_secret'
    ];

    protected static function booted() {
        static::creating(function ($model) {
            $model->api_key =  Uuid::uuid4()->toString();
            $model->api_secret =  Str::random();
        });
    }

    public function administrativeUnit () {
        return $this->belongsTo(AdministrativeUnit::class);
    }

    public function students () {
        return $this->hasMany(Student::class);
    }

    public function teachers () {
        return $this->hasMany(Teacher::class);
    }
}
