<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $admin = new User();
        $admin->name = 'Davide';
        $admin->email = 'test@test.com';
        $admin->password = bcrypt('password');
        $admin->save();

        /**
         * For cicle to add 9 new users
         */
        for($i = 0; $i < 9; $i++){
            $newUser = new User();

            $newUser->name = $faker->firstName().' '.$faker->lastName();
            $newUser->email = $faker->safeEmail();
            $newUser->password = bcrypt($faker->password(8, 15));
            $newUser->save();
        }
    }   
}
