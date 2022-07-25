<?php

namespace Database\Seeders;

use App\Models\Pack;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packs = [
            [
                'pack'            => 'Pack 1',
                'amount'           => '200',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now()
            ],
            [
                'pack'            => 'Pack 2',
                'amount'           => '1000',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now()
            ],
            [
                'pack'            => 'Pack 3',
                'amount'           => '6000',
                'created_at'       => Carbon::now(),
                'updated_at'       => Carbon::now()
            ]
        ];
        Pack::insert($packs);
    }
}
