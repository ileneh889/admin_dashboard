<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin_users')->insert([

            [
                'id' => '1',
                'name' => 'lyhuang',
                'password' => bcrypt(123123),
            ],
            [
                'id' => '2',
                'name' => 'giorgio12345678',
                'password' => bcrypt(123123),
            ],
            [
                'id' => '3',
                'name' => 'test',
                'password' => bcrypt(123123),
            ],
        ]);
    }
}
