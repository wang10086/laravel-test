<?php

use Illuminate\Database\Seeder;
use App\Article;
use App\Author;
class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //填充 的文章数据
       $php = Article::create([
       		'title'=>'PHP的春天来了'
       ]);
       $python = Article::create([
       		'title'=>'python的前生今世'
       ]);
       //填充作者数据
       Author::create([
       		'name'=>'李白',
       		'article_id'=>$php->id,
       	]);
       Author::create([
       		'name'=>'宋江',
       		'article_id'=>$python->id,
       	]);
    }
}
