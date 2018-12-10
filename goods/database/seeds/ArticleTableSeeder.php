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
        //填充作者表数据
        $aa = Author::create([
            'name'      => '张三',
            'sex'       => '女'
        ]);
        $bb = Author::create([
            'name'      => '李四',
            'sex'       => '男'
        ]);

        //填充文章数据
        Article::create([
            'title'     =>'测试PHP标题',
            'content'   =>'测试PHP内容测试PHP内容测试PHP内容测试PHP内容测试PHP内容测试PHP内容',
            'author_id' => $aa->id
        ]);
        Article::create([
            'title'     => '测试Java标题',
            'content'   => '测试Java内容测试Java内容测试Java内容测试Java内容测试Java内容测试Java内容',
            'author_id' => $bb->id
        ]);
        Article::create([
            'title'     => '测试python标题',
            'content'   => '测试python内容测试python内容测试python内容测试python内容测试python内容测试python内容',
            'author_id' => $aa->id
        ]);
    }
}
