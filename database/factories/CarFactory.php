<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "carID"=>"Car". $this->faker->unique()->randomNumber(3),
            "Name" =>$this->faker->name,
            "Brand" =>$this->faker->city,
            "Option" =>$this->faker->randomElement(),
            "Status" =>$this->faker->numberBetween(0,1),
            "Image" =>"HTTPS://". $this ->faker->randomElement()
            //
        ];
    }
}
