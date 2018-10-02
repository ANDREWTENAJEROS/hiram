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
            $table->integer('user_id')->nullable();
            $table->string('title')->nullable();
            $table->string('body', 1500)->nullable();
            $table->string('price_per_day')->nullable();
            $table->string('deposit')->nullable();
            $table->string('condition', 1500)->nullable();
            $table->string('category', 1500)->nullable();
            $table->string('location')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->integer('report_id')->nullable();
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
