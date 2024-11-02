<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artworks')->insert([
            [
                'title' => 'Love and peace',
                'user_id' => '1',
                'submit_date' => '2024-01-01',
                'category_id' => '1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia culpa saepe in beatae odio! Dolore.',
                'price' => '1200',
                'image_path' => 'story1.jpg',
            ],
            [
                'title' => 'friendship',
                'user_id' => '1',
                'submit_date' => '2024-04-01',
                'category_id' => '1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia culpa saepe in beatae odio! Dolore. consectetur adipisicing elit. Officia culpa saepe in beatae odio! Do',
                'price' => '550',
                'image_path' => 'story2.jpg',
            ],
            [
                'title' => 'family',
                'user_id' => '1',
                'submit_date' => '2024-01-01',
                'category_id' => '1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia culpa saepe in beatae odio! Dolore.',
                'price' => '800',
                'image_path' => 'story4.jpg',
            ],
            [
                'title' => 'joyful',
                'user_id' => '1',
                'submit_date' => '2024-04-01',
                'category_id' => '1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia culpa saepe in beatae odio! Dolore. consectetur adipisicing elit. Officia culpa saepe in beatae odio! Do',
                'price' => '700',
                'image_path' => 'story5.jpg',
            ],
            [
                'title' => 'Love and peace',
                'user_id' => '1',
                'submit_date' => '2023-03-01',
                'category_id' => '1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia culpa saepe in beatae odio! Dolore.',
                'price' => '1200',
                'image_path' => 'story1.jpg',
            ],
            [
                'title' => 'friendship',
                'user_id' => '1',
                'submit_date' => '2024-04-12',
                'category_id' => '1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia culpa saepe in beatae odio! Dolore. consectetur adipisicing elit. Officia culpa saepe in beatae odio! Do',
                'price' => '550',
                'image_path' => 'story2.jpg',
            ],
            [
                'title' => 'lineage',
                'user_id' => '1',
                'submit_date' => '2024-07-21',
                'category_id' => '1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia culpa saepe in beatae odio! Dolore.',
                'price' => '800',
                'image_path' => 'story4.jpg',
            ],
            [
                'title' => 'lord of ring',
                'user_id' => '1',
                'submit_date' => '2024-04-01',
                'category_id' => '1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia culpa saepe in beatae odio! Dolore. consectetur adipisicing elit. Officia culpa saepe in beatae odio! Do',
                'price' => '700',
                'image_path' => 'story5.jpg',
            ],
        ]);
    }
}
