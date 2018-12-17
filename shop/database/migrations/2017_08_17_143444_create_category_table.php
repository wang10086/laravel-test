<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',32)->notNull()->comment('专题名称');
        });
        Schema::create('article_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->notNull()->comment('文章的id');
            $table->integer('category_id')->notNull()->comment('专题的id');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
