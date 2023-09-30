<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Serie;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Serie>
 */
class SerieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = Serie::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->word(),
            'available_at' => now()->subDays(5),
            'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
}
