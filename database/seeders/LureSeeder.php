<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lures')->insert([
            [
                'lure_maker_id' => '2',
                'lure_name_ja' => 'アイボーン 78F シャロー',
                'lure_name_en' => 'iBORN 78F shallow',
                'lure_main_image' => 'lure_main_1',
                'lure_tmb_image' => 'lure_tmb_1',
                'attached_hook_size_1' => '#6',
                'attached_hook_size_2' => '#6',
                'attached_hook_size_3' => '',
                'attached_hook_size_4' => '',
                'attached_hook_size_5' => '',
                'attached_ring_size' => '#3',
                'lure_category' => 'フローティングミノー',
                'lure_buoyancy' => 'Floating',
                'lure_shape' => 'minnow',
                'lure_action' => 'ワイドウォブンロール',
                'lure_length' => '78',
                'lure_weight' => '8.5',
                'lure_range_min' => '10',
                'lure_range_max' => '40',
                'lure_ref_url' => 'https://www.ima-ams.co.jp/product/products/detail/63',
                'target_fish_1' => 'シーバス',
                'target_fish_2' => '',
                'target_fish_3' => '',
                'target_fish_4' => '',
                'target_fish_5' => '',
                'lure_infomation' => 'ロングディスタンスで差をつける。\r\n飛行姿勢を安定させ、飛距離を伸ばすボディ形状。\r\nしっかりと水を噛む独特のリップ形状。\r\nシャローでハイアピールなワイドウォブンロールアクション！\r\n\r\n高いシャロー性能と遠投性能をあわせもつ万能シャローレンジミノー。マイクロベイトを捕食するセレクティブな状況や、港湾部や小規模なフィールドでも扱いやすいサイズとして登場。トリッキーなアクションにもしっかりと対応し、ナイトゲームはもとより、デイゲームでの使用にもおすすめです。',
            ],
            [
                'lure_maker_id' => '2',
                'lure_name_ja' => 'アイボーン 98F シャロー',
                'lure_name_en' => 'iBORN 98F shallow',
                'lure_main_image' => 'lure_main_2',
                'lure_tmb_image' => 'lure_tmb_2',
                'attached_hook_size_1' => '#4',
                'attached_hook_size_2' => '#4',
                'attached_hook_size_3' => '',
                'attached_hook_size_4' => '',
                'attached_hook_size_5' => '',
                'attached_ring_size' => '#3',
                'lure_category' => 'フローティングミノー',
                'lure_buoyancy' => 'Floating',
                'lure_shape' => 'minnow',
                'lure_action' => 'ワイドウォブンロール',
                'lure_length' => '98',
                'lure_weight' => '13',
                'lure_range_min' => '0',
                'lure_range_max' => '20',
                'lure_ref_url' => 'https://www.ima-ams.co.jp/product/products/detail/62',
                'target_fish_1' => 'シーバス',
                'target_fish_2' => '',
                'target_fish_3' => '',
                'target_fish_4' => '',
                'target_fish_5' => '',
                'lure_infomation' => 'ロングディスタンスで差をつける。\r\n飛行姿勢を安定させ、飛距離を伸ばすボディ形状。\r\nしっかりと水を噛む独特のリップ形状。\r\nシャローでハイアピールなワイドウォブンロールアクション！\r\n\r\nimaプロスタッフ 辺見哲也氏プロデュースモデルのiBORN 98F shallow。シーバスにとって絶好の捕食エリアとなるシャロー攻略のために生み出されたミノー。水面直下をキープしやすい安定したシャロー性能に加え、辺見氏の代名詞でもあるキャスティング性能を融合させた、まさに懐刀として常に寄り添うような存在です。',
            ],
            [
                'lure_maker_id' => '2',
                'lure_name_ja' => 'アイボーン 118F シャロー',
                'lure_name_en' => 'iBORN 118F shallow',
                'lure_main_image' => 'lure_main_3',
                'lure_tmb_image' => 'lure_tmb_3',
                'attached_hook_size_1' => '#3',
                'attached_hook_size_2' => '#3',
                'attached_hook_size_3' => '',
                'attached_hook_size_4' => '',
                'attached_hook_size_5' => '',
                'attached_ring_size' => '#3',
                'lure_category' => 'フローティングミノー',
                'lure_buoyancy' => 'Floating',
                'lure_shape' => 'minnow',
                'lure_action' => 'ワイドウォブンロール',
                'lure_length' => '118',
                'lure_weight' => '19',
                'lure_range_min' => '5',
                'lure_range_max' => '30',
                'lure_ref_url' => 'https://www.ima-ams.co.jp/product/products/detail/63',
                'target_fish_1' => 'シーバス',
                'target_fish_2' => '',
                'target_fish_3' => '',
                'target_fish_4' => '',
                'target_fish_5' => '',
                'lure_infomation' => 'ロングディスタンスで差をつける。\r\nimaオリジナルの重心移動システム「MRD」搭載。\r\n飛距離とアクションの立ち上がりを両立。\r\n絶妙な浮力とボディーバランスによるスーパーシャロー性能！\r\n\r\n遠投性に優れ、高いシャロー性能をコンセプトに開発されたのがiBORNシリーズ。iBORN 118F shallowは丁寧にシャローを攻めることができるレンジ性能と120mmクラスでは最大クラスの飛距離を叩き出せるルアーに。サイズ感からもいろいろなエリアで活躍すること間違いなしです。',
            ],

        ]);
    }
}