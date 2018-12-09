<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //填充文章数据
        $php = Article::create([
            'title'     =>'测试PHP标题',
            'content'   =>'测试PHP内容测试PHP内容测试PHP内容测试PHP内容测试PHP内容测试PHP内容'
        ]);
        $java = Article::create([
            'title'     => '测试Java标题',
            'content'   => '测试Java内容测试Java内容测试Java内容测试Java内容测试Java内容测试Java内容'
        ]);

        //填充作者表数据
        Author::create([
            'name'      => '张三',
            'article_id'=> $php->id
        ]);
        Author::create([
            'name'      => '李四',
            'article_id'=>  $java->id
        ]);
    }
}
