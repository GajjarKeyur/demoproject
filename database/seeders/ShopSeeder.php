<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Block;
use App\Models\Shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;


class ShopSeeder extends Seeder
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
            $shop = new Shop;
            $shop->userId = User::all()->random()->id;
            $shop->blockID = Block::all()->random()->id;
            $shop->name = $faker->name();    
            $shop->save();
        }
    }
}
