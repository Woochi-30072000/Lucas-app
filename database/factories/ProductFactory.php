<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $images = ['avatar1.png', 'avatar2.png'];
        $key = fake() ->randomElement(['0', '1']);
        return [
            'name' => fake() ->jobTitle(),
            'price' => fake() ->randomElement(['10000', '50000', '60000', '70000', '90000']),
            'image' =>  $images[$key],
            'description' => fake() ->paragraph(),
            'category_id' => fake() ->randomElement(['1', '2', '3', '4', '5', '6', '7','8','9','10']),
            
        ];
    }
}
