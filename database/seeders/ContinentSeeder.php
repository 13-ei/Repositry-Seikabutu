<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('continents')->insert([
            'id' => 1,
            'name' => 'アジア',
        ]);

        DB::table('continents')->insert([
            'id' => 2,
            'name' => 'ヨーロッパ',
        ]);

        DB::table('continents')->insert([
            'id' => 3,
            'name' => '北米',
        ]);

        DB::table('continents')->insert([
            'id' => 4,
            'name' => '南米',
        ]);

        DB::table('continents')->insert([
            'id' => 5,
            'name' => 'アフリカ',
        ]);
    }
}
