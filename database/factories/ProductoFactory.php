<?php

namespace Database\Factories;

use Faker\Core\Number;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Nombre' =>  $this->faker->name(),
            'Color' =>  $this->faker->name(),
            'Peso' =>  $this->faker->numberBetween(1000, 9000),
            'Precio' => $this->faker->numberBetween(1000, 9000),
        ];
    }
}
