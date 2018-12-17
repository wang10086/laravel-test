<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('goods_name',32)->notNull()->unique()->comment('商品名称');
            $table->integer('cat_id')->notNull()->comment('所属栏目的id');
            $table->decimal('goods_price',9,2)->notNull()->default(0)->comment('商品价格');
            $table->string('cover_img',100)->notNull()->default('')->comment('缩略图');
            $table->tinyInteger('is_sale')->notNull()->default(1)->comment('是否销售');
            $table->string('goods_desc')->notNull()->default('')->comment('商品描述');
            $table->timestamps();//生成created_at和updated_at字段的。
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods');
    }
}
