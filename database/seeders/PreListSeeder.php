<?php

namespace Database\Seeders;

use App\Models\PreList;
use Illuminate\Database\Seeder;

class PreListSeeder extends Seeder
{
    public function run()
    {
        PreList::factory()->count(200)->create();
    }
}
