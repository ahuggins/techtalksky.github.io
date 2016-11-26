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
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('type')->nullable();
            $table->string('description')->nullable();
            $table->text('content')->nullable();
            $table->string('video_url')->nullable();
            $table->integer('speaker_id')->nullable();
            $table->dateTime('meetup_date')->nullable();
            $table->string('city')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('meetup_link')->nullable();
            $table->timestamps();
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
