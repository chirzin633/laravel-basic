<?php

namespace Database\Factories;

use App\Models\MentorModel;
use App\Models\SiswaModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<SiswaModel>
 */
class SiswaModelFactory extends Factory
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
            'nama' => fake()->name(),
            'tanggal_lahir' => fake()->dateTimeBetween('-22 years', '-20 years')->format('Y-m-d'),
            'jurusan' => fake()->randomElement([
                'Teknik Informatika',
                'Ilmu Komputer',
                'Teknik Mesin',
                'PGSD',
                'Kedokteran',
                'Fisika'
            ]),
            'nilai' => fake()->numberBetween(70, 100),
            'mentor_id' => MentorModel::inRandomOrder()->first()->id
        ];
    }
}
