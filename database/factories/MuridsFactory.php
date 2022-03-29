<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MuridsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'nis' => mt_rand(10000000, 15000000),
            'jenkel' => rand(0, 1) ? 'Laki-laki' : 'Perempuan',
            'kelas' => mt_rand(7, 9),
            'tanggal_lahir' => $this->faker->date(),
        ];
    }
}
