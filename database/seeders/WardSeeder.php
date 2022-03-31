<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Ward;
use Carbon\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;


class WardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i= 1; $i <=5; $i++)
        {
            $ward = new Ward;
            $ward->districtID = District::all()->random()->id;
            $ward->name = $faker->citySuffix;    
            $ward->save();
        }
    }
}
