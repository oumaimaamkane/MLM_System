<?php

namespace Database\Seeders;

use App\Models\Region;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            [
                'region_name'        => 'Tanger–Tétouan–Al Hoceima',
                'region_name_ar'        => 'طنجة-تطوان-الحسيمة',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ],
            [
                'region_name'        => 'L\'oriental',
                'region_name_ar'    =>  'الشرق',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ],
            [
                'region_name'        => 'Fès-Meknès',
                'region_name_ar'    =>  'فاس مكناس',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ],
            [
                'region_name'        => 'Rabat-Salé-Kénitra',
                'region_name_ar'    =>  'الرباط - سلا - القنيطرة',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ],
            [
                'region_name'        => 'Béni Mellal-Khénifra',
                'region_name_ar'    =>  ' بني ملال خنيفرة',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ],
            [
                'region_name'        => 'Casablanca-Settat',
                'region_name_ar'    =>  'الدار البيضاء - سطات',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ],
            [
                'region_name'        => 'Marrakech-Safi',
                'region_name_ar'    =>  'مراكش - أسفي',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ],
            [
                'region_name'        => 'Darâa-Tafilalet',
                'region_name_ar'    =>  ' درعة - تافيلالت',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ],
            [
                'region_name'        => 'Souss-Massa',
                'region_name_ar'    =>  'سوس ماسة',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ],
            [
                'region_name'        => '​Guelmim-Oued Noun',
                'region_name_ar'    =>  'ڭلميم-وادي نون',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ],
            [
                'region_name'        => 'Laâyoune-Sakia El Hamra',
                'region_name_ar'    =>  'العيون - الساقية الحمراء',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ],
            [
                'region_name'        => 'Dakhla-Oued Eddahab',
                'region_name_ar'    =>  'الداخلة - وادي الذهب',
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now()
            ],
        ];
        Region::insert($regions);
    }
}
