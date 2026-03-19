<?php

namespace Database\Factories;

use App\Models\MentorModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<MentorModel>
 */
class MentorModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "nama" => fake()->name(),
            "deskripsi" => fake()->paragraph()
        ];
    }
}
