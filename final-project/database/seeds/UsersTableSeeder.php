<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           $user=App\User::create([
            'name' => 'Marcella Sandrine',
            'email' => 'jobeditions@gmail.com',
            'password' => bcrypt('password'),
            'admin' => 2,
           ]);

        App\Profile::create([
            'user_id'=> $user->id,
            'firstname' => 'Marcella',
            'lastname' => 'Sandrine',
            'avatar' => '/assets/uploads/avatar/avatar1.jpg',
            'about' => '"Bonjour, je suis Jenifer Smith, un expert en écriture créatif spécialisé dans le domain de surrealisme. Mon diplôme de Université Massey avec un Bachelor spécialisé dans lécriture créative."',
            'facebook' => 'facebook.com',
            'twitter' => 'twitter.com',
            'country' => 'France',
            'birthday' => '23rd March 1987',
            'occupation' => 'Écrivain',
            'mobile' => '0651634750',
            
            
        ]);
    }
}
