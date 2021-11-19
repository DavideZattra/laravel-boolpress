<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Tag;


class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $tags = $faker->unique()->words(10); //random words for tags
        

        foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->color = $faker->hexColor();
            $newTag->save();
        }
    }
}
