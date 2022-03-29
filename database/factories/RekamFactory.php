<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class RekamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'dokter_id' => mt_rand(1, 3),
            'pasien_id' =>  mt_rand(1, 2),
            //'suhu' => $this->faker->numberBetween(mt_rand(36, 45.5)),
            'slug' => $this->faker->slug(),
            'kondisi' => $this->faker->paragraph()
        ];
    }
}
