<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $user=App\Tag::create([
            'tags' => 'Générale',
            'order' => '1',
            'id' => '1',
        ]);
    }
}