<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtworkTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artwork_types')->insert(
            [
                ['category_name' => 'AI generate'],
                ['category_name' => 'Comic'],
                ['category_name' => 'hand paint'],
            ]
        );
    }
}
