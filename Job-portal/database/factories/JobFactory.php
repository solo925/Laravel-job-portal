<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\experience;
use App\Enums\Category;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> fake()->jobTitle,
            'description' => implode("\n\n", fake()->paragraphs(3)),
            'salary'=>fake()->numberBetween(10_000,100_000),
            'location'=>fake()->city,
            'category' => Arr::random(array_column(Category::cases(), 'value')),
            // 'experience'=>fake()->randomElement(Experience::cases()),
           'experience' => Arr::random(array_column(Experience::cases(), 'value')),
        ];
    }
}
