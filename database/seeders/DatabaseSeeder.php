<?php

namespace Database\Seeders;

use App\Models\PreList;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(ShopProductSeeder::class);

        // add member data
        $this->call(MemberSeeder::class);

        //artworktype
        $this->call(ArtworkTypeSeeder::class);


        //arttwork
        // $this->call(ArtworkSeeder::class);

        $this->call(Forum::class);

        // arttwork
        $this->call(ArtworkSeeder::class);

        // PreList
        $this->call(PreListSeeder::class);

    }
}
