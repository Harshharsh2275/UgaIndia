<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id('blog_id');
            $table->string('blog_name')->unique();
            $table->integer('blog_author', false, true);
            $table->string('blog_short_des', 150);
            $table->string('blog_full_des', 200);
            $table->string('blog_thumb_url', 200)->unique();
            $table->string('blog_tags');
            $table->string("blog_category", 30);
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
