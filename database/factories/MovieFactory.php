<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'thumbnail' => 'https://picsum.photos/2000/3000?' . fake()->randomNumber(),
            'title' => fake()->unique()->city(),
            'genre_id' => fake()->numberBetween(1, 15),
            'subtitle' => fake()->words(1,true),
            'actor' => fake()->name(),
            'synopsis' => fake()->paragraphs(2, true),
            'imdb_rating' => fake()->numberBetween(1, 10),
            'link' => 'https://picsum.photos/2000/3000?' . fake()->randomNumber(),
            'quality' => fake()->randomElement(['CAM','HD','FULL HD','2K','4K']),
            'year' => fake()->year(),
            'duration' => fake()->time(),
            'region' => fake()->randomElement(['ASIA','AU','EU','US','AFR']),
        ];
    }
}
