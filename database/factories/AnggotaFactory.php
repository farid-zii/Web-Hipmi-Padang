<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anggota>
 */
class AnggotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'idDivisi'=>mt_rand(1,10),
            'nama'=>$this->faker->name(),
            'email'=>fake()->email(),
            'alamat'=>fake()->address(),
            'noHp'=>fake()->phoneNumber(),
            'jKelamin'=>fake()->randomElement(['L', 'P']),
            'tempatLahir'=>fake()->cityPrefix(),
            'tanggalLahir'=>fake()->date(),
            'motto'=>fake()->words(10,true),
            'foto'=>fake()->randomElement(['foto.jpg','foto2.jpg','foto3.jpg']),
        ];
    }
}
