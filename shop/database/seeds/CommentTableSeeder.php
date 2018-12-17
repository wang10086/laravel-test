<?php

use Illuminate\Database\Seeder;
use App\Comment;
class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
        	'content'=>'PHP是好语言,可以成就未来',
        	'article_id'=>1
        ]);
        Comment::create([
        	'content'=>'我非常喜欢PHP',
        	'article_id'=>1
        ]);
    }
}
