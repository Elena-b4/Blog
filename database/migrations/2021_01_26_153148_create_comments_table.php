<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->timestamps();
            $table->text('content');
            $table->unsignedBigInteger('visitor_id');
            $table->unsignedBigInteger('post_id');

            $table->softDeletes();

//            index
            $table->index('visitor_id', 'comment_visitor_idx');
            $table->index('post_id', 'comment_post_idx');
//            fk
            $table->foreign('visitor_id', 'comment_visitor_fk')->on('visitors')->references('id');
            $table->foreign('post_id', 'comment_post_fk')->on('posts')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
