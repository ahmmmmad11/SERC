<?php


namespace App\Http\Services;


use App\Models\Exchange;
use App\Models\School;

class ExchangesServices
{
    public static function scope ($new_school_id, $old_school_id) {
        $new_school = School::find($new_school_id);
        $old_school = School::find($old_school_id);

        if ($new_school->administrative_unit_id == $old_school->administrative_unit_id) {
            return 'inner';
        }

        if ($new_school->administrativeUnit->locality_id == $old_school->administrativeUnit->locality_id) {
            return 'unit';
        }

        if ($new_school->administrativeUnit->locality->state_id == $old_school->administrativeUnit->locality->state_id ) {
            return 'local';
        }

        return 'regional';
    }

    public static function exchange (Exchange $exchange) {
        $exchange->student()->update(['school_id' => $exchange->new_school_id]);
        return true;
    }

}
