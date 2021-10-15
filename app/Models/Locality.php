<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Locality extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'state_id',
        'name'
    ];

    public function state () {
        return $this->belongsTo(State::class);
    }

    public function administrativeUnits () {
        return $this->hasMany(AdminstrativeUnit::class);
    }

}
