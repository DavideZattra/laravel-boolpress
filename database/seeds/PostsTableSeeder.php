<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i = 0; $i < 50; $i++ ){

            $newPost = new Post();

            $categoryId =random_int(0, 9); //give a random category to the post
            if ($categoryId = 0){
                $categoryId = null;
            }
            
            $newPost->title = $faker->words(4, true);
            $newPost->category_id = $categoryId; 
            $newPost->author = $faker->firstName().' '.$faker->lastName();
            $newPost->content = $faker->paragraph(50, false);
            $newPost->date = $faker->date('Y-m-d');
            $newPost->img_url = $faker->imageUrl();

            $newPost->save();

        }
    }
}
