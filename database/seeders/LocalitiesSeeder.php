<?php

namespace Database\Seeders;

use App\Models\Locality;
use App\Models\State;
use Illuminate\Database\Seeder;

class LocalitiesSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $state = State::where('name', 'الشمالية')->first();
        $cities = [
            ['state_id' => $state->id, 'name' => 'وادي حلفا'],
            ['state_id' => $state->id, 'name' => 'دنقلا'],
            ['state_id' => $state->id, 'name' => 'القولد'],
            ['state_id' => $state->id, 'name' => 'كرمة'],
            ['state_id' => $state->id, 'name' => 'البرقيق'],
            ['state_id' => $state->id, 'name' => 'مروي'],
            ['state_id' => $state->id, 'name' => 'الدبة'],
        ];
        Locality::insert($cities);

        $state = State::where('name', 'نهر النيل')->first();
        $cities = [
            ['state_id' => $state->id, 'name' => 'الدامر'],
            ['state_id' => $state->id, 'name' => 'عطبرة'],
            ['state_id' => $state->id, 'name' => 'ابوحمد'],
            ['state_id' => $state->id, 'name' => 'شندي'],
            ['state_id' => $state->id, 'name' => 'المتمة'],
            ['state_id' => $state->id, 'name' => 'البحيرة'],
            ['state_id' => $state->id, 'name' => 'بربر'],
        ];
        Locality::insert($cities);

        $state = State::where('name', 'البحر الاحمر')->first();
        $cities = [
            ['state_id' => $state->id, 'name' => 'بورتسودان'],
            ['state_id' => $state->id, 'name' => 'سنكات'],
            ['state_id' => $state->id, 'name' => 'طوكر'],
            ['state_id' => $state->id, 'name' => 'حلايب'],
            ['state_id' => $state->id, 'name' => 'سواكن'],
            ['state_id' => $state->id, 'name' => 'عقيق'],
            ['state_id' => $state->id, 'name' => 'القنب والاوليبد'],
            ['state_id' => $state->id, 'name' => 'هيا'],
            ['state_id' => $state->id, 'name' => 'درديب'],
            ['state_id' => $state->id, 'name' => 'جيبيت'],
        ];
        Locality::insert($cities);

        $state = State::where('name', 'القضارف')->first();
        $cities = [
            ['state_id' => $state->id, 'name' => 'القضارف'],
            ['state_id' => $state->id, 'name' => 'ريفي القضارف'],
            ['state_id' => $state->id, 'name' => 'البطانة'],
            ['state_id' => $state->id, 'name' => 'الفاو'],
            ['state_id' => $state->id, 'name' => 'الفشقة'],
            ['state_id' => $state->id, 'name' => 'باسندة'],
            ['state_id' => $state->id, 'name' => 'القلابات الغربية'],
            ['state_id' => $state->id, 'name' => 'القلابات الشرقية'],
            ['state_id' => $state->id, 'name' => 'قلع النحل'],
            ['state_id' => $state->id, 'name' => 'القريشة'],
            ['state_id' => $state->id, 'name' => 'المفازة'],
            ['state_id' => $state->id, 'name' => 'الرهد'],
        ];
        Locality::insert($cities);

        $state = State::where('name', 'كسلا')->first();
        $cities = [
            ['state_id' => $state->id, 'name' => 'كسلا'],
            ['state_id' => $state->id, 'name' => 'نهر عطيرة'],
            ['state_id' => $state->id, 'name' => 'تلكوك'],
            ['state_id' => $state->id, 'name' => 'همشكوريب'],
            ['state_id' => $state->id, 'name' => 'خشم القربة'],
            ['state_id' => $state->id, 'name' => 'ريفي كسلا'],
            ['state_id' => $state->id, 'name' => 'حلفا الجديدة'],
            ['state_id' => $state->id, 'name' => 'غرب كسلا'],
            ['state_id' => $state->id, 'name' => 'ود الحليو'],
            ['state_id' => $state->id, 'name' => 'شمال الدلتا'],
            ['state_id' => $state->id, 'name' => 'جنوب الدلتا'],
        ];
        Locality::insert($cities);

        $state = State::where('name', 'الخرطوم')->first();
        $cities = [
            ['state_id' => $state->id, 'name' => 'الخرطوم'],
            ['state_id' => $state->id, 'name' => 'الخرطوم بحري'],
            ['state_id' => $state->id, 'name' => 'امدرمان'],
            ['state_id' => $state->id, 'name' => 'شرق النيل'],
            ['state_id' => $state->id, 'name' => 'امبدة'],
            ['state_id' => $state->id, 'name' => 'كرري'],
            ['state_id' => $state->id, 'name' => 'جبل اولياء'],
        ];
        Locality::insert($cities);

        $state = State::where('name', 'الجزيرة')->first();
        $cities = [
            ['state_id' => $state->id, 'name' => 'ودمدني'],
            ['state_id' => $state->id, 'name' => 'جنوب الجزيرة'],
            ['state_id' => $state->id, 'name' => 'شرق الجزيرة'],
            ['state_id' => $state->id, 'name' => 'الحصاحيصا'],
            ['state_id' => $state->id, 'name' => 'الكاملين'],
            ['state_id' => $state->id, 'name' => 'المناقل'],
            ['state_id' => $state->id, 'name' => 'القرشي'],
            ['state_id' => $state->id, 'name' => 'أم القرى'],
        ];
        Locality::insert($cities);

        $state = State::where('name', 'سنار')->first();
        $cities = [
            ['state_id' => $state->id, 'name' => 'سنجة'],
            ['state_id' => $state->id, 'name' => 'سنار'],
            ['state_id' => $state->id, 'name' => 'الدالي والمزموم'],
            ['state_id' => $state->id, 'name' => 'السوكي'],
            ['state_id' => $state->id, 'name' => 'شرق سنار'],
            ['state_id' => $state->id, 'name' => 'الدندر'],
            ['state_id' => $state->id, 'name' => 'ابو حجار'],
        ];
        Locality::insert($cities);

        $state = State::where('name', 'النيل الازرق')->first();
        $cities = [
            ['state_id' => $state->id, 'name' => 'الدمازين'],
            ['state_id' => $state->id, 'name' => 'الروصيرص'],
            ['state_id' => $state->id, 'name' => 'باو'],
            ['state_id' => $state->id, 'name' => 'الكرمك'],
            ['state_id' => $state->id, 'name' => 'التضامن'],
            ['state_id' => $state->id, 'name' => 'قسيان'],
        ];
        Locality::insert($cities);

        $state = State::where('name', 'النيل الابيض')->first();
        $cities = [
            ['state_id' => $state->id, 'name' => 'ربك'],
            ['state_id' => $state->id, 'name' => 'كوستي'],
            ['state_id' => $state->id, 'name' => 'القطينة'],
            ['state_id' => $state->id, 'name' => 'ام رمتة'],
            ['state_id' => $state->id, 'name' => 'الجبلين'],
            ['state_id' => $state->id, 'name' => 'السلام'],
            ['state_id' => $state->id, 'name' => 'الدويم'],
            ['state_id' => $state->id, 'name' => 'تندلتي'],
        ];
        Locality::insert($cities);

        $state = State::where('name', 'شمال كردفان')->first();
        $cities = [
            ['state_id' => $state->id, 'name' => 'سودري'],
            ['state_id' => $state->id, 'name' => 'جبرة الشيخ'],
            ['state_id' => $state->id, 'name' => 'بارا'],
            ['state_id' => $state->id, 'name' => 'غرب بارا'],
            ['state_id' => $state->id, 'name' => 'شيكان'],
            ['state_id' => $state->id, 'name' => 'ام روابة'],
            ['state_id' => $state->id, 'name' => 'ام دم'],
            ['state_id' => $state->id, 'name' => 'الرهد'],
        ];
        Locality::insert($cities);


        $state = State::where('name', 'جنوب كردفان')->first();
        $cities = [
            ['state_id' => $state->id, 'name' => 'القوز'],
            ['state_id' => $state->id, 'name' => 'قدير'],
            ['state_id' => $state->id, 'name' => 'هيبان'],
            ['state_id' => $state->id, 'name' => 'تلودي'],
            ['state_id' => $state->id, 'name' => 'الليري'],
            ['state_id' => $state->id, 'name' => 'كادوقلي'],
            ['state_id' => $state->id, 'name' => 'ابوجبيهة'],
            ['state_id' => $state->id, 'name' => 'هبيلا'],
            ['state_id' => $state->id, 'name' => 'دلامي'],
            ['state_id' => $state->id, 'name' => 'البرام'],
            ['state_id' => $state->id, 'name' => 'التضامن'],
            ['state_id' => $state->id, 'name' => 'رشاد'],
            ['state_id' => $state->id, 'name' => 'العباسية'],
            ['state_id' => $state->id, 'name' => 'الدلنج'],
            ['state_id' => $state->id, 'name' => 'الريف الشرقي'],
            ['state_id' => $state->id, 'name' => 'ام دورين'],
        ];
        Locality::insert($cities);

        $state = State::where('name', 'غرب كردفان')->first();
        $cities = [
            ['state_id' => $state->id, 'name' => 'ود بندة'],
            ['state_id' => $state->id, 'name' => 'ابوزبد'],
            ['state_id' => $state->id, 'name' => 'غبيش'],
            ['state_id' => $state->id, 'name' => 'النهود'],
            ['state_id' => $state->id, 'name' => 'الاضية'],
            ['state_id' => $state->id, 'name' => 'الخوي'],
            ['state_id' => $state->id, 'name' => 'السلام'],
            ['state_id' => $state->id, 'name' => 'النهود'],
            ['state_id' => $state->id, 'name' => 'لقاوة'],
            ['state_id' => $state->id, 'name' => 'كيلك'],
            ['state_id' => $state->id, 'name' => 'الصنط'],
            ['state_id' => $state->id, 'name' => 'بابنوسة'],
            ['state_id' => $state->id, 'name' => 'ابيي'],
            ['state_id' => $state->id, 'name' => 'الميرم'],
            ['state_id' => $state->id, 'name' => 'الدبب'],
        ];
        Locality::insert($cities);


        $state = State::where('name', 'شمال دارفور')->first();
        $cities = [
            ['state_id' => $state->id, 'name' => 'الفاشر'],
            ['state_id' => $state->id, 'name' => 'ام كدادة'],
            ['state_id' => $state->id, 'name' => 'كتم'],
            ['state_id' => $state->id, 'name' => 'اللعيت'],
            ['state_id' => $state->id, 'name' => 'كلمندو'],
            ['state_id' => $state->id, 'name' => 'مليط'],
            ['state_id' => $state->id, 'name' => 'الكومة'],
            ['state_id' => $state->id, 'name' => 'المالحة'],
            ['state_id' => $state->id, 'name' => 'دار السلام'],
            ['state_id' => $state->id, 'name' => 'كبكابية'],
            ['state_id' => $state->id, 'name' => 'سرف عمرة'],
            ['state_id' => $state->id, 'name' => 'السريف'],
            ['state_id' => $state->id, 'name' => 'الطينة'],
            ['state_id' => $state->id, 'name' => 'امبرو'],
            ['state_id' => $state->id, 'name' => 'كرنوي'],
            ['state_id' => $state->id, 'name' => 'طويلة'],
            ['state_id' => $state->id, 'name' => 'طويشة'],
        ];
        Locality::insert($cities);

        $state = State::where('name', 'وسط دارفور')->first();
        $cities = [
            ['state_id' => $state->id, 'name' => 'زالنجي'],
            ['state_id' => $state->id, 'name' => 'وادي صالح'],
            ['state_id' => $state->id, 'name' => 'مكجر'],
            ['state_id' => $state->id, 'name' => 'ام دخن'],
            ['state_id' => $state->id, 'name' => 'نيرتتي'],
            ['state_id' => $state->id, 'name' => 'روكرو'],
            ['state_id' => $state->id, 'name' => 'بندسي'],
            ['state_id' => $state->id, 'name' => 'ازوم'],
        ];
        Locality::insert($cities);

        $state = State::where('name', 'شرق دارفور')->first();
        $cities = [
            ['state_id' => $state->id, 'name' => 'الضعين'],
            ['state_id' => $state->id, 'name' => 'بحر العرب'],
            ['state_id' => $state->id, 'name' => 'عسلاية'],
            ['state_id' => $state->id, 'name' => 'ابو جابرة'],
            ['state_id' => $state->id, 'name' => 'الفردوس'],
            ['state_id' => $state->id, 'name' => 'شعيرية'],
            ['state_id' => $state->id, 'name' => 'ياسين'],
            ['state_id' => $state->id, 'name' => 'عديلة'],
            ['state_id' => $state->id, 'name' => 'ابو كارنكا'],
        ];
        Locality::insert($cities);

        $state = State::where('name', 'غرب دارفور')->first();
        $cities = [
            ['state_id' => $state->id, 'name' => 'الجنينة'],
            ['state_id' => $state->id, 'name' => 'كلبس'],
            ['state_id' => $state->id, 'name' => 'بيضة'],
            ['state_id' => $state->id, 'name' => 'كرينك'],
            ['state_id' => $state->id, 'name' => 'سيرا'],
        ];
        Locality::insert($cities);

        $state = State::where('name', 'جنوب دارفور')->first();
        $cities = [
            ['state_id' => $state->id, 'name' => 'نيالا'],
            ['state_id' => $state->id, 'name' => 'نيالا شمال'],
            ['state_id' => $state->id, 'name' => 'السلام'],
            ['state_id' => $state->id, 'name' => 'كاس'],
            ['state_id' => $state->id, 'name' => 'بليل'],
            ['state_id' => $state->id, 'name' => 'عد الفرسان'],
            ['state_id' => $state->id, 'name' => 'رهيد البردي'],
            ['state_id' => $state->id, 'name' => 'تلس'],
            ['state_id' => $state->id, 'name' => 'برام'],
            ['state_id' => $state->id, 'name' => 'قريضة'],
            ['state_id' => $state->id, 'name' => 'نتيقة'],
            ['state_id' => $state->id, 'name' => 'مرشينح'],
            ['state_id' => $state->id, 'name' => 'شرق جبل مرة'],
            ['state_id' => $state->id, 'name' => 'السنطة'],
            ['state_id' => $state->id, 'name' => 'كتيلا'],
            ['state_id' => $state->id, 'name' => 'ام دافوق'],
            ['state_id' => $state->id, 'name' => 'الوحدة'],
            ['state_id' => $state->id, 'name' => 'الردوم'],
            ['state_id' => $state->id, 'name' => 'دمسو'],
            ['state_id' => $state->id, 'name' => 'شطاية'],
            ['state_id' => $state->id, 'name' => 'كبم'],
        ];
        Locality::insert($cities);
    }
}
