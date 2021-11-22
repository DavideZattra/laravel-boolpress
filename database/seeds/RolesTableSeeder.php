<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $roles = ['administrator', 'staff', 'moderator', 'writer', 'designer' ];

        for($i = 0; $i < count($roles); $i++){
            $newRole = new Role();

            $newRole->title = $roles[$i];
            // $newRole->level = count($roles) -$i;
            $newRole->level = $i;


            $newRole->save();
        }
    }
}
