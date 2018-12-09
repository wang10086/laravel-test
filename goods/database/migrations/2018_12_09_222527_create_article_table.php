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
        //文章表
        Schema::create('article',function (Blueprint $table){
            $table->increments('id');
            $table->string('title',100)->notNull()->comment('文章标题');
            $table->string('content',1024)->notNull()->default('testDefalueContent')->comment('文章内容');
        });
        //DB::statement("ALTER TABLE 'article' comment'文章表'");//表注释
        Schema::create('author',function (Blueprint $table){
            $table->increments('id');
            $table->string('name',22)->notNull()->defaule('我是默认名字')->comment('作者名字');
            $table->integer('article_id')->notNull()->comment('文章id');
        });
        //Db:statement("ALTER TABLE 'author' comment'作者表'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //执行回滚时使用
        Schema::dropIfExists('article');
        Schema::dropIfExists('auhtor');
    }
}
