<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $states = [
            ['name' => 'الشمالية'],
            ['name' => 'نهر النيل'],
            ['name' => 'البحر الاحمر'],
            ['name' => 'القضارف'],
            ['name' => 'كسلا'],
            ['name' => 'الخرطوم'],
            ['name' => 'الجزيرة'],
            ['name' => 'سنار'],
            ['name' => 'النيل الازرق'],
            ['name' => 'النيل الابيض'],
            ['name' => 'شمال كردفان'],
            ['name' => 'جنوب كردفان'],
            ['name' => 'غرب كردفان'],
            ['name' => 'شمال دارفور'],
            ['name' => 'وسط دارفور'],
            ['name' => 'شرق دارفور'],
            ['name' => 'غرب دارفور'],
            ['name' => 'جنوب دارفور'],
        ];

        State::insert($states);
    }
}
