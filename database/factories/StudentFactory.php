<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        $gender = fake()->randomElements(['male', 'female'])[0];
        return [
            'name' => fake()->name(gender: $gender),
            'age'=>fake()->numberBetween(18,25),
            'gender'=>$gender

        ];
    }
}
