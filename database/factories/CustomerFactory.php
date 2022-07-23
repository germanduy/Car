<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "Phone"=>"0". $this->faker->unique()->randomNumber(9),
            "Name" =>$this->faker->name,
            "Address" =>$this->faker->address,
            "Birthday" => $this ->faker->date("Y-m-d","2000-01-01")
        ];
    }
}
