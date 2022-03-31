<?php

namespace Database\Seeders;

use App\Models\Block;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=1;$i<=5;$i++){
            $user = new User;
            $user->blockID = Block::all()->random()->id;
            $user->name = $faker->name(20);
            $user->email = $faker->email(20);
            $user->phone = $faker->phoneNumber();
            $user->password = $faker->password;
            $user->save();
        }
    }
}
