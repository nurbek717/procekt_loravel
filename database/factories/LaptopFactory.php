<?php

namespace Database\Factories;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Laptop>
 */
class LaptopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand' => fake()->company(), 
            'company_id'=> Company::factory(),
            'price' => fake()->randomFloat(2, 500, 3000), 
            'color' => fake()->colorName() 
        ];
    }
}




