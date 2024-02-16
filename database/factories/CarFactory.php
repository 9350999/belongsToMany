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
    public function definition(): array
    {
        return [
            'model' => $this->faker->randomElement([
                'Audi',
                'BMW',
                'Opel',
                'Ferrari',
                'VW',
                'Lada',
                'Ford'
            ]),
            'color' => $this->faker->colorName,
            'number' => strtoupper($this->faker->bothify('?? ### ??')),
        ];
    }
}
