<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LureMakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lure_makers')->insert([
            [
                'lure_maker_name_ja' => 'アーガス',
                'lure_maker_name_en' => 'ARGUS',
                'lure_maker_logo_image' => 'lure_maker_argus',
                'lure_maker_ref_url' => ''
            ],
            [
                'lure_maker_name_ja' => 'アイマ',
                'lure_maker_name_en' => 'ima',
                'lure_maker_logo_image' => 'lure_maker_ima',
                'lure_maker_ref_url' => 'https://www.ima-ams.co.jp/'
            ],
            [
                'lure_maker_name_ja' => 'アピア',
                'lure_maker_name_en' => 'APIA',
                'lure_maker_logo_image' => 'lure_maker_apia',
                'lure_maker_ref_url' => 'https://www.apiajapan.com/'
            ],
            [
                'lure_maker_name_ja' => 'ブルーブルー',
                'lure_maker_name_en' => 'BLUE BLUE',
                'lure_maker_logo_image' => '',
                'lure_maker_ref_url' => 'https://www.bluebluefishing.com/'
            ],
        ]);
    }
}
