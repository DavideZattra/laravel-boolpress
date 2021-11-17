<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\UserInfo;

class UserInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $userInfo = new UserInfo();

        $userInfo->date_of_birth = $faker->dateTime();
    }
}
