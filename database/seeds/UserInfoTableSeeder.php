<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\UserInfo;
use App\User;

class UserInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users_id = User::pluck('id')->toArray();

        for ($i=0; $i < 10; $i++) { 
            
            $userInfo = new UserInfo();
            
            $userInfo->user_id = $users_id[$i];
            $userInfo->date_of_birth = $faker->date('Y-m-d');
            $userInfo->country = $faker->country();
            $userInfo->region = $faker->state();
            $userInfo->city = $faker->city();
            $userInfo->address = $faker->address();
            $userInfo->telephone_number = $faker->phoneNumber();
    
            $userInfo->save();
        }
    }
}
