<?php

namespace Database\Factories;

use App\Models\Donasi;
use App\Models\Keuangan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LaporanKeuangan>
 */
class LaporanKeuanganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pemasukan = $this->faker->numberBetween(1000000, 20000000); // Pemasukan antara 1jt - 20jt
        $pengeluaran = $this->faker->numberBetween(500000, $pemasukan); // Pengeluaran antara 500rb - pemasukan

        return [
            'tanggal_laporan' => fake()->date(), // Tanggal laporan
            'total_pemasukan' => $pemasukan, // Total pemasukan
            'total_pengeluaran' => $pengeluaran, // Total pengeluaran
        ];
    }

    public function keuangan()
    {
        return $this->belongsTo(Keuangan::class, 'keuangan_id');
    }

    public function pemasukan()
    {
        return $this->belongsTo(Donasi::class, 'total_pemasukan_id');
    }
}
