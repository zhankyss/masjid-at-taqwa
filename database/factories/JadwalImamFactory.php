<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JadwalImam>
 */
class JadwalImamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tanggal' => fake()->date(), // Tanggal acak
            'waktu_shalat' => fake()->randomElement([
                'Subuh', 'Dzuhur', 'Ashar', 'Maghrib', 'Isya'
            ]), // Waktu shalat acak
        ];
    }
}
