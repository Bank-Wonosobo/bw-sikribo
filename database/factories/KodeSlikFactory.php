<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KodeSlikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->name(),
            'kode' => $this->faker->name()
        ];
    }
}
