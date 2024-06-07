<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HasilSlikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama'=> $this->faker->name(),
            'file' => null
        ];
    }
}
