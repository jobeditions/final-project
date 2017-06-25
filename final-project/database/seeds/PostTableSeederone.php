<?php

use Illuminate\Database\Seeder;

class PostTableSeederone extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
         App\Post::create([
            
            'order' => '1',
            'id' => '1',
            'title' => 'Premier Post',
            'slug' => 'Premier-Article-1',
            'excerpt' => '"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries"',
            'content' => '"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s"',
            'featured' => '/images/seed/img4.jpg',
            'category_id' => '1',
        ]);

        
    }

}
