<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameTypeProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // Corrected mappings based on product.sql and game_type.sql
            ['product_id' => 1, 'game_type_id' => 2, 'image' => 'Yee_Bet_Casino.png', 'rate' => 1.0000], // Yee Bet - LIVE_CASINO
            ['product_id' => 2, 'game_type_id' => 2, 'image' => 'Sa-Gaming_Casino.png', 'rate' => 1.0000], // SA Gaming - LIVE_CASINO
            ['product_id' => 3, 'game_type_id' => 1, 'image' => 'live_22.png', 'rate' => 1.0000], // Live22 - SLOT
            ['product_id' => 4, 'game_type_id' => 2, 'image' => 'wm_new_casino.png', 'rate' => 1.0000], // WMCasino - LIVE_CASINO
            ['product_id' => 5, 'game_type_id' => 2, 'image' => 'Pragmatic_Play_Casino.png', 'rate' => 1.0000], // PragmaticPlay - LIVE_CASINO
            ['product_id' => 6, 'game_type_id' => 1, 'image' => 'pp_play.png', 'rate' => 1.0000], // PragmaticPlay - SLOT
            ['product_id' => 7, 'game_type_id' => 4, 'image' => 'pp_play.png', 'rate' => 1.0000], // PragmaticPlay - VIRTUAL_SPORT
            ['product_id' => 8, 'game_type_id' => 14, 'image' => 'Pragmatic_Play_Casino.png', 'rate' => 1.0000], // PragmaticPlay - LIVE_CASINO_PREMIUM
            ['product_id' => 9, 'game_type_id' => 2, 'image' => 'Dream_Gaming_Casino.png', 'rate' => 1.0000], // Dream Gaming - LIVE_CASINO
            ['product_id' => 10, 'game_type_id' => 1, 'image' => 'Advantplay.png', 'rate' => 1.0000], // AdvantPlay - SLOT
            ['product_id' => 11, 'game_type_id' => 1, 'image' => 'j_db.png', 'rate' => 1.0000], // JDB - SLOT
            ['product_id' => 12, 'game_type_id' => 8, 'image' => 'j_db.png', 'rate' => 1.0000], // JDB - FISHING
            ['product_id' => 13, 'game_type_id' => 1, 'image' => 'play_star_slot.png', 'rate' => 1.0000], // PlayStar - SLOT
            ['product_id' => 14, 'game_type_id' => 1, 'image' => 'cq_9.png', 'rate' => 1.0000], // CQ9 - SLOT
            ['product_id' => 15, 'game_type_id' => 1, 'image' => 'ji_li.png', 'rate' => 1.0000], // Jili - SLOT
            ['product_id' => 16, 'game_type_id' => 8, 'image' => 'ji_li.png', 'rate' => 1.0000], // Jili - FISHING
            ['product_id' => 17, 'game_type_id' => 1, 'image' => 'booming_game.png', 'rate' => 1.0000], // BoomingGames - SLOT
            ['product_id' => 18, 'game_type_id' => 1, 'image' => 'Wow-gamming.png', 'rate' => 1.0000], // WOW GAMING - SLOT
            ['product_id' => 19, 'game_type_id' => 2, 'image' => 'ai_livecasino.png', 'rate' => 1.0000], // AI Live Casino - LIVE_CASINO
            ['product_id' => 20, 'game_type_id' => 1, 'image' => 'Hacksaw.png', 'rate' => 1.0000], // HACKSAW - SLOT
            ['product_id' => 21, 'game_type_id' => 1, 'image' => 'Bigpot.png', 'rate' => 1.0000], // BIGPOT - SLOT
            ['product_id' => 22, 'game_type_id' => 1, 'image' => 'Epicwin.png', 'rate' => 1.0000], // EPICWIN - SLOT
            ['product_id' => 23, 'game_type_id' => 1, 'image' => 'Fachi.png', 'rate' => 1.0000], // Fachai - SLOT
            ['product_id' => 24, 'game_type_id' => 1, 'image' => 'novomatic.png', 'rate' => 1.0000], // N2 - SLOT
            ['product_id' => 25, 'game_type_id' => 1, 'image' => 'SmartSoft.png', 'rate' => 1.0000], // SmartSoft - SLOT
        ];

        DB::table('game_type_product')->insert($data);
    }
}
