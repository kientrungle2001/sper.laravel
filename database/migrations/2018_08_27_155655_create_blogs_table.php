<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('blog_title');
            $table->string('blog_alias');
            $table->string('blog_author');
            $table->string('blog_category_id');
            $table->string('blog_img');
            $table->integer('blog_views');
            $table->integer('blog_comments');
            $table->integer('blog_likes');
            $table->integer('blog_shares');
            $table->text('blog_content');
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
        Schema::dropIfExists('blogs');
    }
}
