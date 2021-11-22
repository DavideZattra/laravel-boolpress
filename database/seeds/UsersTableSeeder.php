<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

use Faker\Generator as Faker;

use App\User;
use App\Models\Role;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $roles_id = Role::pluck('id')->toArray();

        $admin = new User();
        $admin->name = 'Davide';
        $admin->email = 'test@test.com';
        $admin->password = bcrypt('password');
        $admin->save();
        $admin->roles()->attach(1);

        /**
         * For cicle to add 9 new users
         */
        for($i = 0; $i < 9; $i++){
            $newUser = new User();

            $newUser->name = $faker->firstName().' '.$faker->lastName();
            $newUser->email = $faker->safeEmail();
            $newUser->password = bcrypt($faker->password(8, 15));
            $newUser->save();

            //random number of roles added
            for($j = 0; $j < random_int(0, count($roles_id)); $j++){

                $role = Arr::random($roles_id);
                
                $newUser->roles()->attach($role);
                
            }
        }
    }   
}
