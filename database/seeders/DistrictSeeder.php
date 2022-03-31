<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class DistrictSeeder extends Seeder 
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $district = new District;
        $faker = Faker::create();
        for($i= 1; $i <=5; $i++)
        {
            $district = new District;
            $district->name = $faker->city;    
            $district->save();
        }
    }
}
