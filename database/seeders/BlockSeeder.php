<?php

namespace Database\Seeders;

use App\Models\Block;
use App\Models\Ward;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class BlockSeeder extends Seeder
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
            $block = new Block;
            $block->wardID = Ward::all()->random()->id;
            $block->name = $faker->streetName;    
            $block->save();
        }
    }
}
