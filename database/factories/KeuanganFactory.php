<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Keuangan>
 */
class KeuanganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jenis' => fake()->randomElement(['Pemasukan', 'Pengeluaran']), // Jenis transaksi
            'keterangan' => fake()->sentence(), // Keterangan transaksi
            'jumlah' => fake()->numberBetween(50000, 10000000), // Jumlah antara 50 ribu - 10 juta
            'tanggal' => fake()->date(), // Tanggal transaksi
        ];
    }
}
