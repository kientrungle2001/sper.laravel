<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('article_title');
            $table->string('article_alias');
            $table->string('article_author');
            $table->string('article_category_id');
            $table->string('article_img');
            $table->integer('article_views');
            $table->integer('article_comments');
            $table->integer('article_likes');
            $table->integer('article_shares');
            $table->text('article_content');
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
        Schema::dropIfExists('articles');
    }
}
