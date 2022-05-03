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
    public function definition()
    {
        return [
            //
            "slug" => $this->faker->slug,
            'title' => $this->faker->sentence,
            'thumbnail' => 'https://imgs.search.brave.com/fuyItet5iw_MEpBqcxJRPJXTJK2OsKEI58by2p1RoKI/rs:fit:835:225:1/g:ce/aHR0cHM6Ly90c2Uy/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5l/MXMzYnctbERiSEhV/c3JaZFJuX2FnSGFF/TiZwaWQ9QXBp'
        ];
    }
}
