<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([

            UsersTableSeeder::class,
            UserInfoTableSeeder::class,
            CategoriesTableSeeder::class,
            TagsTableSeeder::class,
            PostsTableSeeder::class,

        ]);
    }
}
