<?php

use Illuminate\Database\Seeder;

class PostTableSeederfour extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         App\Post::create([
            
            'order' => '4',
            'id' => '4',
            'title' => 'Quatriéme Post',
            'slug' => 'Quatriéme-Article-1',
            'excerpt' => '"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries"',
            'content' => '"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s"',
            'featured' => '/images/seed/img12.jpg',
            'category_id' => '1',
        ]);
    }
}
