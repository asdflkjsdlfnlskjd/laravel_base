<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteTableDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('posts');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('posts', function (Blueprint $table ){
            $table->id();
            $table->string('title');
            $table->text('post_content');
            $table->string('image');
            $table->bigInteger('likes');
            $table->integer('is_published')->nullable();
            $table->timestamps();
            
            $table->softDeletes();
         });
    }
}
