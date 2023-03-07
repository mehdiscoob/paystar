<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->randomElement(['galaxy s23','iphone pro max 13','iphone 12','galaxy A57',"iphone 14"]),
            "price"=>$this->faker->randomElement([100000,500000,350000,1000000,10000]),
            "count"=>$this->faker->randomNumber(1,100)
        ];
    }
}
