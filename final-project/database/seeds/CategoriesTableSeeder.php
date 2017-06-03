<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        $user=App\Category::create([
            'name' => 'Générale',
            'order' => '1',
            'id' => '1',
            'slug' => 'Générale-1',
        ]);
     }
}
