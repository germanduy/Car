<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\Customer;
use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $customer =Customer::all()->pluck("Phone")->toArray();
        $car =Car::all()->pluck("carID")->toArray();
        $staff =Staff::all()->pluck("sID")->toArray();
        return [
            //  "Phone"=>"0". $this->faker->unique()->randomNumber(9),
            //            "Name" =>$this->faker->name,
            //            "Address" =>$this->faker->address,
            //            "Birthday" => $this ->faker->date("Y-m-d","2000-01-01")
            "cID"=>$this->faker->unique()->randomNumber(3),
            'PhoneCTM'=>$this->faker->randomElement($customer),
            'sID'=>$this->faker->randomElement($staff),
            'carID'=>$this->faker->randomElement($car),
            "startDate" => $this ->faker->date("Y-m-d","2022-02-02"),
            "endDate" => $this ->faker->date("Y-m-d","2022-02-02"),
            "Total" => $this-> faker -> randomNumber(4),
            "Image" =>"HTTPS://". $this ->faker->randomElement()

        ];
    }
}
