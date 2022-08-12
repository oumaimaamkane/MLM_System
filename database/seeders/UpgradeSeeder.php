<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Upgrade;

class UpgradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $upgrades = [
            [
                'name'            => 'Direct',
                'members'           => '5',
                'amount'           => '350',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now()
            ],
            [
                'name'            => 'Upgrade 1',
                'members'           => '125',
                'amount'           => '6020',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now()
            ],
            [
                'name'            => 'Upgrade 2',
                'members'           => '390625',
                'amount'           => '41552',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now()
            ],
            [
                'name'            => 'Upgrade 3',
                'members'           => '3125',
                'amount'           => '400000',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now()
            ],
            
        ];
        Upgrade::insert($upgrades);
    }
}
