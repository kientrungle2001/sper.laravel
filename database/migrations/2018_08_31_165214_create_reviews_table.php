<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('review_title');
            $table->string('review_alias');
            $table->string('review_author');
            $table->string('review_category_id');
            $table->text('review_content');
            $table->string('review_img');
            $table->string('review_video');
            $table->string('review_views');
            $table->string('review_comments');
            $table->string('review_shares');
            $table->string('review_likes');
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
        Schema::dropIfExists('reviews');
    }
}
