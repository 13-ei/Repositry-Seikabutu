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
        DB::table('continents')->updateOrinsert(
            [
                'id' => 1
            ],
            [
                'name' => 'アジア',
                'image_url' => 'https://www.dropbox.com/scl/fi/lunjybgqdhis0e72yz1w8/Asia.jpg?rlkey=g9iovnda64l381zl2ypy67ov6&st=v9xb9hul&raw=1',
            ]
        );

        DB::table('continents')->updateOrinsert(
            [
                'id' => 2
            ],
            [
                'name' => 'ヨーロッパ',
                'image_url' => 'https://www.dropbox.com/scl/fi/nnpopm7c9mgjrx2csrxm6/Europe.jpg?rlkey=hugrdas5lj08iei21l590cdf2&st=tomkszcs&raw=1',
            ]
        );

        DB::table('continents')->updateOrinsert(
            [
                'id' => 3
            ],
            [
                'name' => '北米',
                'image_url' => 'https://www.dropbox.com/scl/fi/d1qfvr5mjn8u9d27tumtr/America.jpg?rlkey=ogrpmexf3jp3ktcm7ywoydjuw&st=vx3ourjq&raw=1',
            ]
        );

        DB::table('continents')->updateOrinsert(
            [
                'id' => 4
            ],
            [
                'name' => '南米',
                'image_url' => 'https://www.dropbox.com/scl/fi/v9y8phd6ctr9i7vpdvj49/Brazil.jpg?rlkey=68orut1ubhj1z7di75rrr4a4x&st=j8br0rew&raw=1',
            ]
        );

        DB::table('continents')->updateOrinsert(
            [
                'id' => 5
            ],
            [
                'name' => 'アフリカ',
                'image_url' => 'https://www.dropbox.com/scl/fi/s4mmbhfz8g8n2wlx59r8g/Africa.jpg?rlkey=hn8d1avuotq1kajn2jt33dhps&st=bmf437ak&raw=1',
            ]
        );
    }
}
