<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->string('body');
            $table->integer('user_id')->unsigned();
            $table->integer('subreddit_id')->unsigned();

            //Foreign Keys 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('subreddit_id')->references('id')->on('subreddits')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
