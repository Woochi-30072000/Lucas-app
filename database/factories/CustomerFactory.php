<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $gender = fake()->randomElement(['0', '1']);

        return [
            'name' => fake() -> name(),
            'phone' => fake() -> phoneNumber(),
            'email' => fake() -> unique()-> safeEmail(),
            'address' => fake() -> address(),
            'birthday' => fake() -> date('Y-m-d','now'),
            'gender' => $gender,
            'password' => bcrypt('123456'),   
            
        ];
    }
}
