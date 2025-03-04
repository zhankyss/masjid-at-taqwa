<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Donasi>
 */
class DonasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jenis' => fake()->randomElement(['Zakat', 'Infak', 'Donasi']), // Jenis transaksi
            'jumlah' => fake()->numberBetween(50000, 5000000), // Nilai antara 50 ribu - 5 juta
            'metode_pembayaran' => fake()->randomElement(['Tunai', 'Transfer Bank', 'E-Wallet']), // Metode pembayaran
            'tanggal' => fake()->date(), // Tanggal random
        ];
    }
}
