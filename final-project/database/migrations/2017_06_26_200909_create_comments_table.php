<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->unsigned(); 
            $table->integer('user_id')->nullable(); 
           // $table->string('author');
            //$table->string('email');
            //$table->string('website')->nullable();
            $table->text('body');
            $table->boolean('approved');
            $table->timestamps();

           
        });

        Schema::table('comments', function (Blueprint $table) {

        $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade'); 
       });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('comments', function (Blueprint $table) {

         
       });


        Schema::dropIfExists('comments');
    }
}
