<?php

use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goods')->insert([
        	[
        		'goods_name'=>'iphone11',
        		'cat_id'=>1,
        		'goods_desc'=>'好手机，好好',
        	],
        	[
        		'goods_name'=>'华为笔记本',
        		'cat_id'=>2,
        		'goods_desc'=>'好本子，okokook',
        	],
        	[
        		'goods_name'=>'鼠标N98',
        		'cat_id'=>3,
        		'goods_desc'=>'好鼠标，只用一次，一辈子不坏',
        	]
        ]);
    }
}
