<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            'name' => '中国',
            'continent_id' => 1,
            'id' => 1,
        ]);

        DB::table('countries')->insert([
            'name' => '韓国',
            'continent_id' => 1,
            'id' => 2,
        ]);

        DB::table('countries')->insert([
            'name' => 'インドネシア',
            'continent_id' => 1,
            'id' => 3,
        ]);

        DB::table('countries')->insert([
            'name' => 'カンボジア',
            'continent_id' => 1,
            'id' => 4,
        ]);

        DB::table('countries')->insert([
            'name' => 'シンガポール',
            'continent_id' => 1,
            'id' => 5,
        ]);

        DB::table('countries')->insert([
            'name' => 'タイ',
            'continent_id' => 1,
            'id' => 6,
        ]);

        DB::table('countries')->insert([
            'name' => 'フィリピン',
            'continent_id' => 1,
            'id' => 7,
        ]);

        DB::table('countries')->insert([
            'name' => 'ベトナム',
            'continent_id' => 1,
            'id' => 8,
        ]);

        DB::table('countries')->insert([
            'name' => 'マレーシア',
            'continent_id' => 1,
            'id' => 9,
        ]);

        DB::table('countries')->insert([
            'name' => 'ミャンマー',
            'continent_id' => 1,
            'id' => 10,
        ]);

        DB::table('countries')->insert([
            'name' => 'ラオス',
            'continent_id' => 1,
            'id' => 11,
        ]);

        DB::table('countries')->insert([
            'name' => 'ミャンマー',
            'continent_id' => 1,
            'id' => 12,
        ]);

        DB::table('countries')->insert([
            'name' => 'インド',
            'continent_id' => 1,
            'id' => 13,
        ]);

        DB::table('countries')->insert([
            'name' => 'スリランカ',
            'continent_id' => 1,
            'id' => 14,
        ]);

        DB::table('countries')->insert([
            'name' => 'ブータン',
            'continent_id' => 1,
            'id' => 15,
        ]);

        DB::table('countries')->insert([
            'name' => 'トルコ',
            'continent_id' => 1,
            'id' => 16,
        ]);

        DB::table('countries')->insert([
            'name' => 'イギリス',
            'continent_id' => 2,
            'id' => 17,
        ]);

        DB::table('countries')->insert([
            'name' => 'ドイツ',
            'continent_id' => 2,
            'id' => 18,
        ]);

        DB::table('countries')->insert([
            'name' => 'オランダ',
            'continent_id' => 2,
            'id' => 19,
        ]);

        DB::table('countries')->insert([
            'name' => 'スイス',
            'continent_id' => 2,
            'id' => 20,
        ]);

        DB::table('countries')->insert([
            'name' => 'フィンランド',
            'continent_id' => 2,
            'id' => 21,
        ]);

        DB::table('countries')->insert([
            'name' => 'アイスランド',
            'continent_id' => 2,
            'id' => 22,
        ]);

        DB::table('countries')->insert([
            'name' => 'クロアチア',
            'continent_id' => 2,
            'id' => 23,
        ]);

        DB::table('countries')->insert([
            'name' => 'ベルギー',
            'continent_id' => 2,
            'id' => 24,
        ]);

        DB::table('countries')->insert([
            'name' => 'スペイン',
            'continent_id' => 2,
            'id' => 25,
        ]);

        DB::table('countries')->insert([
            'name' => 'フランス',
            'continent_id' => 2,
            'id' => 26,
        ]);

        DB::table('countries')->insert([
            'name' => 'イタリア',
            'continent_id' => 2,
            'id' => 27,
        ]);

        DB::table('countries')->insert([
            'name' => 'ノルウェー',
            'continent_id' => 2,
            'id' => 28,
        ]);

        DB::table('countries')->insert([
            'name' => 'ギリシャ',
            'continent_id' => 2,
            'id' => 29,
        ]);

        DB::table('countries')->insert([
            'name' => 'チェコ',
            'continent_id' => 2,
            'id' => 30,
        ]);

        DB::table('countries')->insert([
            'name' => 'アメリカ',
            'continent_id' => 3,
            'id' => 31,
        ]);

        DB::table('countries')->insert([
            'name' => 'カナダ',
            'continent_id' => 3,
            'id' => 32,
        ]);

        DB::table('countries')->insert([
            'name' => 'アルゼンチン',
            'continent_id' => 4,
            'id' => 33,
        ]);

        DB::table('countries')->insert([
            'name' => 'ウルグアイ',
            'continent_id' => 4,
            'id' => 34,
        ]);

        DB::table('countries')->insert([
            'name' => 'キューバ',
            'continent_id' => 4,
            'id' => 35,
        ]);

        DB::table('countries')->insert([
            'name' => 'コロンビア',
            'continent_id' => 4,
            'id' => 36,
        ]);

        DB::table('countries')->insert([
            'name' => 'ジャマイカ',
            'continent_id' => 4,
            'id' => 37,
        ]);

        DB::table('countries')->insert([
            'name' => 'チリ',
            'continent_id' => 4,
            'id' => 38,
        ]);

        DB::table('countries')->insert([
            'name' => 'ドミニカ共和国',
            'continent_id' => 4,
            'id' => 39,
        ]);

        DB::table('countries')->insert([
            'name' => 'ブラジル',
            'continent_id' => 4,
            'id' => 40,
        ]);

        DB::table('countries')->insert([
            'name' => 'ペルー',
            'continent_id' => 4,
            'id' => 41,
        ]);

        DB::table('countries')->insert([
            'name' => 'エジプト',
            'continent_id' => 5,
            'id' => 42,
        ]);

        DB::table('countries')->insert([
            'name' => 'エチオピア',
            'continent_id' => 5,
            'id' => 43,
        ]);

        DB::table('countries')->insert([
            'name' => 'ガーナ',
            'continent_id' => 5,
            'id' => 44,
        ]);

        DB::table('countries')->insert([
            'name' => 'ケニア',
            'continent_id' => 5,
            'id' => 45,
        ]);

        DB::table('countries')->insert([
            'name' => 'コンゴ共和国',
            'continent_id' => 5,
            'id' => 46,
        ]);

        DB::table('countries')->insert([
            'name' => 'セネガル',
            'continent_id' => 5,
            'id' => 47,
        ]);

        DB::table('countries')->insert([
            'name' => 'タンザニア',
            'continent_id' => 5,
            'id' => 48,
        ]);

        DB::table('countries')->insert([
            'name' => 'ナイジェリア',
            'continent_id' => 5,
            'id' => 49,
        ]);

        DB::table('countries')->insert([
            'name' => '南アフリカ',
            'continent_id' => 5,
            'id' => 50,
        ]);

        DB::table('countries')->insert([
            'name' => 'モロッコ',
            'continent_id' => 5,
            'id' => 51,
        ]);

        DB::table('countries')->insert([
            'name' => 'ルワンダ',
            'continent_id' => 5,
            'id' => 52,
        ]);
    }
}
