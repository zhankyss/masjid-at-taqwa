<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InvestarisMajid>
 */
class InvestarisMajidFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang' => fake()->word(), // Nama barang random
            'jumlah_barang' => fake()->numberBetween(1, 100), // Jumlah antara 1 - 100
            'kondisi' => fake()->randomElement(['Baik', 'Rusak Ringan', 'Rusak Berat']), // Status kondisi
            'keterangan' => fake()->sentence(), // Keterangan random
        ];
    }
}
