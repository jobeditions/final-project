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
         
           $post1= App\Post::create([
            
            'order' => '1',
            'id' => '1',
            'title' => 'Premier Post',
            'slug' => 'Premier-Article-1',
            'excerpt' => '"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries"',
            'content' => '"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s"',
            'featured' => '/images/seed/img4.jpg',
            'category_id' => '1',
           ]);

           $post2=App\Post::create([
            
            'order' => '2',
            'id' => '2',
            'title' => 'Deuxième Article',
            'slug' =>'Deuxiéme-Article-2',
            'excerpt' => '"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries"',
            'content' => '"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s"' ,
            'featured' => '/images/seed/img5.jpg',
            'category_id' => '1',
           ]);

          $post3=App\Post::create([
            
            'order' => '3',
            'id' => '3',
            'title' => 'Troisième Article',
            'slug' => 'Troisième-Article-3',
            'excerpt' => '"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries"',
            'content' => '"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s"' ,
            'featured' => '/images/seed/banner.jpg',
            'category_id' => '1',
           ]);

         $post4=App\Post::create([
            
            'order' => '4',
            'id' => '4',
            'title' => 'Quatriéme Post',
            'slug' => 'Quatriéme-Article-1',
            'excerpt' => '"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries"',
            'content' => '"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s"',
            'featured' => '/images/seed/img12.jpg',
            'category_id' => '1',
           ]);

         $post5=App\Post::create([
            
            'order' => '5',
            'id' => '5',
            'title' => 'Cinqiéme Post',
            'slug' => 'Cinqiéme-Article-1',
            'excerpt' => '"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries"',
            'content' => '"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s"',
            'featured' => '/images/seed/img6.jpg',
            'category_id' => '1',
           ]);
    }

}
