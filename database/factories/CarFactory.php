<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'name_ar' => $this->faker->name,
            'hint' => $this->faker->sentence,
            'hint_ar' => $this->faker->sentence,
            'current' => $this->faker->boolean(1)
        ];
    }
}
