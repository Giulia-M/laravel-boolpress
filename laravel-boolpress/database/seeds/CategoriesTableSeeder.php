<?php
use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $categories = ['antipasti', 'primi'];

        foreach($categories as $category) {
            $new_category_object = new Category();
            
        }
    }
}
