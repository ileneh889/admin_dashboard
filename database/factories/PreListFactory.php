<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PreList;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PreList>
 */
class PreListFactory extends Factory
{
    protected $model = PreList::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pre_name' => $this->faker->name,
            'quest_level' => $this->faker->randomElement(['Level 1', 'Level 2', 'Level 3']),
            'user_count' => $this->faker->numberBetween(1, 100),
            'ticket_price' => $this->faker->randomFloat(2, 10, 100),
            'available' => $this->faker->randomElement([0, 1]),
            'time_start' => $this->faker->time(),
            'time_end' => $this->faker->time(),
            'note' => $this->faker->sentence,
        ];
    }
}
