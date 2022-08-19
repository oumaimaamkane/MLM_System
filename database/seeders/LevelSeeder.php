<?php

namespace Database\Seeders;

use App\Models\Level;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levels = [
            [
                'name'            => 'Niveau 0',
                'members'           => '0',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now()
            ],
            [
                'name'            => 'Niveau 1',
                'members'           => '25',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now()
            ],
            [
                'name'            => 'Niveau 2',
                'members'           => '125',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now()
            ],
            [
                'name'            => 'Niveau 3',
                'members'           => '15625',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now()
            ],
            [
                'name'            => 'Niveau 4',
                'members'           => '97625',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now()
            ],
            
        ];
        Level::insert($levels);
    }
}
