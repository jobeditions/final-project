<?php

use Illuminate\Database\Seeder;

class PostTableSeederthree extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
         $post=App\Post::create([
            
            'order' => '3',
            'id' => '3',
            'title' => 'Troisième Article',
            'slug' => 'Troisième-Article-3',
            'excerpt' => '"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries"',
            'content' => '"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s"' ,
            'featured' => '/images/seed/banner.jpg',
            'category_id' => '1',
        ]);

        
   
 }
}
