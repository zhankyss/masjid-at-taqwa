<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name();
        $nameEmail = str_replace(' ', '', $name);
        
        $role = [
            'Takmir',
            'CoTakmir',
            'Sekretaris',
            'Bendahara',
            'Anggota',
        ];

        return [
            'name' => fake()->name(),
            'email' => $nameEmail.'@gmail.com',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('1'),
            'gender' => fake()->randomElement(['Ikhwan', 'Akhwat']),
            'alamat' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'date_of_birth' => fake()->date(),
            'status' => fake()->randomElement($role),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
