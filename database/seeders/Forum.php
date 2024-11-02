<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Forum extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('forums')->insert([

            [

                'player_id' => 0,
                'player_permissions' => 0,
                'submit_time' => now(),
                'area' => 'news',
                'category' => 'hot issue',
                'article_id' => 1,
                'article_title' => '水晶洞地圖開放',
                'descriptions' => '玩家攻略',
            ],
            [
                'player_id' => 0,
                'player_permissions' => 1,
                'submit_time' => now(),
                'area' => 'events',
                'category' => 'upcoming event',
                'article_title' => '新活動公告',
                'article_id' => 1,
                'descriptions' => '活動詳情',
            ],
            [
                'player_id' => 0,
                'player_permissions' => 0,
                'submit_time' => now(),
                'area' => 'discussion',
                'category' => 'gameplay',
                'article_title' => '遊戲建議',
                'article_id' => 1,
                'descriptions' => '玩家提出的建議',
            ],
            [
                'player_id' => 0,
                'player_permissions' => 0,
                'submit_time' => now(),
                'area' => 'updates',
                'category' => 'patch notes',
                'article_title' => '遊戲更新',
                'article_id' => 1,
                'descriptions' => '最新的遊戲更新內容',
            ],
            [
                'player_id' => 0,
                'player_permissions' => 1,
                'submit_time' => now(),
                'area' => 'bugs',
                'category' => 'technical issue',
                'article_title' => '遊戲錯誤回報',
                'article_id' => 1,
                'descriptions' => '技術問題的回報',
            ],
            [
                'player_id' => 0,
                'player_permissions' => 0,
                'submit_time' => now(),
                'area' => 'feedback',
                'category' => 'suggestions',
                'article_title' => '玩家意見反饋',
                'article_id' => 1,
                'descriptions' => '遊戲改進的建議',
            ],
            [
                'player_id' => 0,
                'player_permissions' => 1,
                'submit_time' => now(),
                'area' => 'announcements',
                'category' => 'server maintenance',
                'article_title' => '伺服器維護公告',
                'article_id' => 1,
                'descriptions' => '維護時間和內容',
            ],
        ]);
    }
}
