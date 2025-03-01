<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AnggotaKemasjidan>
 */
class AnggotaKemasjidanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(), // Nama random
            'kontak' => fake()->numerify('08##########'), // Nomor HP random
            'alamat' => fake()->address(), // Alamat random
            'peran' => fake()->randomElement(['Takmir Masjid', 'Sekretaris', 'Bendahara', 'Anggota Kemasjidan', 'Anggota Remaja Masjid']), // Peran dalam organisasi masjid
        ];
    }
}
