<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Contract;
use App\Models\Customer;
use App\Models\Staff;
use Database\Factories\CustomerFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

//        Customer::factory(30)->create();
//        Staff::factory(10)->create();
//        Car::factory(30)->create();4
        Contract::factory(10)->create();
    }
}
