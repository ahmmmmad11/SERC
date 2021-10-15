<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdministrativeUnit extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['local_id', 'name'];

    public function locality () {
        return $this->belongsTo(Locality::class);
    }

    public function schools () {
        return $this->hasMany(School::class);
    }
}
