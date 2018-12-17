<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //添加专题的数据，还有中间表的数据
        $soft = Category::create([
        	'name'=>'软件开发'
        ]);
        $study = Category::create([
        	'name'=>'自学考试'
        ]);
        //填充中间表
        DB::table('article_category')->insert([
        	[
        		'article_id'=>1,
        		'category_id'=>$soft->id,
        	],
        	[
        		'article_id'=>1,
        		'category_id'=>$study->id,
        	],
        	[
        		'article_id'=>2,
        		'category_id'=>$soft->id,
        	],
        	[
        		'article_id'=>2,
        		'category_id'=>$study->id,
        	],

        ]);
    }
}
