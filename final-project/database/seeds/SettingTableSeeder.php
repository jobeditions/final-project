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
            'author_name' => 'Marcella Sandrine',
            'address' => '49 Place Nicole Neuburger Bondy',
            'image1' => '/images/seed/img16.JPG',
            'image2' => '/images/seed/img18.JPG',
            'image3' => '/images/seed/img171.JPG',
            'image4' => '/images/seed/logo.png',
            'image5' => '/images/seed/img12.jpg',
            'propos_title1' => 'À propos de Moi',
            'propos_title2' => 'Qui je suis?',
            'para1' => "<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
                     <h4>Some facts about me.</h4>  
                     <li>Nullam at turpis a orci pretium pharetra.</li>
                     <li>Curabitur tincidunt purus mollis facilisis placerat.</li>
                     <li>Mauris a nulla ac est tincidunt interdum.</li>
                     <li>Pellentesque vel enim nec urna imperdiet mollis.</li>
                     <li>Integer interdum risus et scelerisque volutpat.</li>",
            'para2' => " <h3>WHY I STARTED THIS BLOG?</h3>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                 It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                 versions of Lorem Ipsum.</p>
                 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages 
                 and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>",
            'para3' => "<h3>WHY YOU SHOULD READ THIS BLOG?</h3>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                 It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                 versions of Lorem Ipsum.</p>   
                 <ul>
                     <li>Always free from repetition</li>
                     <li>Vestibulum rhoncus nibh quis dui fermentum iaculis.</li>
                     <li>The standard chunk of Lorem Ipsum</li>
                     <li>In consequat dolor in lorem egestas ultrices.</li>
                     <li>Ultrices rhoncus nibh quis dui.</li>
                 </ul>",


            
           ]);
    }
}
