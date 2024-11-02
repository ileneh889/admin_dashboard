<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::create([
            'admin_account' => 'user',
            'admin_password' => Hash::make('123456'),
            'admin_name' => 'user0087',
            'admin_email' => 'twst@example.com',
            'permission_level' => 1
        ]);

        for ($i = 1; $i <= 10; $i++) {
            Member::create([
                'admin_account' => 'user' . sprintf('%04d', $i),
                'admin_password' => Hash::make('123456'),
                'admin_name' => 'user' . $i, // 使用sprintf确保用户名固定长度为 8 位，不足的部分用 0 填充
                'admin_email' => 'user' . $i . '@example.com',
                'permission_level' => 1
            ]);
        }

        DB::table('player_character')->insert(
            [
                'player_account' => 'abc',
                'player_password' => '123456',
                'player_name' => 'poo',
                'player_email' => 'aaa@test.com',
            ]
        );
    }
}
