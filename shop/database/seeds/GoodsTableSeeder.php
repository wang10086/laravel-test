<?php

use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{
    public function run()
    {
       //使用DB类来完成添加数据
        DB::table('goods')->insert([
        	[
        		'goods_name'=>'iphone10',
        		'cat_id'=>1,
        		'goods_desc'=>'非常牛的手机，能穿越时空'
        	],
        	[
        		'goods_name'=>'泡泡糖',
        		'cat_id'=>2,
        		'goods_desc'=>'非常甜，非常苦'
        	],
        	[
        		'goods_name'=>'棒棒糖',
        		'cat_id'=>1,
        		'goods_desc'=>'非常好吃'
        	],
        ]);
    }
}
