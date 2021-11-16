<?php

use Illuminate\Database\Seeder;

use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['tech', 'fashion', 'sport', 'gossip', 'fishing', 'hunting', 'homedecoration', 'fitness', 'wellness'];
        

        foreach ($categories as $category) {
            $newCategory = new Category();
            $newCategory->type = $category;
            $newCategory->save();
        }
    }
}
