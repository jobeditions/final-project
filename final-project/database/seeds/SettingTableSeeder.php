<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $setting=App\Settings::create([
            'site_name' => 'Blog de Marcella Sandrine',
            'contact_email' => 'jobeditions@gmail.com',
            'contact_number' => '+33-651 634750',
            'title'=> 'Blog de Marcella',
            'description'=>'Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.',
            'address' => '49 Place Nicole Neuburger Bondy France',
            'image1' => '/images/settings/img16.jpg',
            'image2' => '/images/settings/img18.jpg',
            'image3' => '/images/settings/img171.jpg',
            'image4' => '/images/settings/logo.png',

            
           ]);
    }
}
