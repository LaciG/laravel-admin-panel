<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->increments('id');
            $table->text('blog_title');
            $table->text('blog_category');
            $table->text('language');
            $table->text('blog_start_post');
            $table->text('blog_rest_post');
            $table->text('blog_cover_image');

            $table->text('blog_cover_image_alt');
            $table->text('blog_meta_description');
            $table->text('blog_meta_keywords');

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
        Schema::dropIfExists('blog');
    }
}
