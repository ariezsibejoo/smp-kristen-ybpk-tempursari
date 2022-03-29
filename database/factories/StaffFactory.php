<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
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
            'nip' => mt_rand(10000000, 15000000),
            'tanggal_lahir' => $this->faker->date(),
            'jabatan' => 'Guru',
        ];
    }
}
