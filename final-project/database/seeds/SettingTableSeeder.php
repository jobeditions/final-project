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
            'image1' => '/images/seed/img16.JPG',
            'image2' => '/images/seed/img18.JPG',
            'image3' => '/images/seed/img171.JPG',
            'image4' => '/images/seed/logo.png',

            
           ]);
    }
}
