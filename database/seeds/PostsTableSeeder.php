<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

use App\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

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
        $users_id = User::pluck('id')->toArray();
        $category_Id = Category::pluck('id')->toArray();
        $tag_ids = Tag::pluck('id')->toArray();
        

        for( $i = 0; $i < 50; $i++ ){

            $newPost = new Post();

            
            
            $newPost->title = $faker->words(4, true);
            $newPost->category_id = Arr::random($category_Id); 
            $newPost->user_id = Arr::random($users_id);
            $newPost->content = $faker->paragraph(50, false);
            $newPost->date = $faker->date('Y-m-d');
            $newPost->img_url = $faker->imageUrl();
            
            $newPost->save();

            //random number of tags added
            for($j = 0; $j < random_int(0, count($tag_ids)); $j++){

                $tags = Arr::random($tag_ids);
    
                $newPost->tags()->sync($tags);
            }
        }
    }
}
