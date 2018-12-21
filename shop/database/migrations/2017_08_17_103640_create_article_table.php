<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',100)->notNull()->comment('文章的命名'); 
        });
        Schema::create('author', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',32)->notNull()->comment('作者的名称');
            $table->integer('article_id')->notNull()->comment('所写文章的id'); 
        });
    }
    public function down()
    {
         Schema::dropIfExists('article');
         Schema::dropIfExists('author');
    }
}
