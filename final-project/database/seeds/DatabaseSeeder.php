<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(TagsTableSeeder::class);
         $this->call(SettingTableSeeder::class);
         $this->call(PostTableSeederone::class);
         $this->call(PostTableSeedertwo::class);
         $this->call(PostTableSeederthree::class);
         $this->call(PostTableSeederfour::class);
    }
}
