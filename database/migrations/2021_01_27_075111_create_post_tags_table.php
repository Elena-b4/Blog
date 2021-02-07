<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tags', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('tag_id');

            $table->softDeletes();

//            index
            $table->index('post_id', 'post_tags_post_idx');
            $table->index('tag_id', 'post_tags_tag_idx');
//            fk
            $table->foreign('post_id', 'post_tags_post_fk')->on('posts')->references('id');
            $table->foreign('tag_id', 'post_tags_tag_fk')->on('tags')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_tags');
    }
}
