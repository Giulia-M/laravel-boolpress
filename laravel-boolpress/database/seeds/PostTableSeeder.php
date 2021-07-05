<?php

use Illuminate\Database\Seeder;
// use App\Post;
use Faker\Generator as Faker;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            // Post::truncate();
      
        // for($i=0; $i<5; $i++) {
        //     $newPost =new Post();
        //     $newPost->title =$faker->sentence;
        //     $newPost->slug =$faker->slug();
        //     $newPost->user_id =$faker->randomDigit();
 
    
        //     $newPost->content =$faker->realText(500);
        //     $newPost->updated_at =$faker-> date($format = 'Y-m-d', $max = 'now');
        //     $newPost->created_at =$faker-> date($format = 'Y-m-d', $max = 'now');
 
 
        //     $newPost->save();
        // }
            factory(App\Post::class, 50)->create();
    }
}
