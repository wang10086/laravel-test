<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Author;
use App\Comment;
use App\Category;
class DemoController extends Controller
{
    
    public function demo(){
        //取出一个专题时，也要取出所包含的文章
        $data =  Category::find(1);//取出一个专题
        echo $data->name;
        echo '<hr>';
        //取出该文章所属的专题
        foreach($data->article as $v){
            echo $v->title.'<br/>';
        }

    }
    /*public function demo(){
        //取出一个文章时，也要取出所属的专题
        $data =  Article::find(1);//取出一个文章
        echo $data->title;
        echo '<hr>';
        //取出该文章所属的专题
        foreach($data->category as $v){
            echo $v->name.'<br/>';
        }

    }*/
    /*public function demo(){
    	//取出所有的评论
    	//$data = Comment::all();//只有评论信息，没有所属文章的信息
    	//foreach($data as $v){
    			//echo $v->content.'---'.$v->article->title.'<br/>';
    	//}
    	//当$v->article->title执行此句时，重新查询数据库获取文章信息。
    	$data = Comment::with('article')->get();//使用with('article')
    	//表示在查询时，一块把对应的文章给取出来了，相当于底层的left join查询
    	foreach($data as $v){
    			echo $v->content.'---'.$v->article->title.'<br/>';
    	}

    }*/

    /*public function demo(){
    	//取出id=1的文章，并且取出该文章的所有的评论。。
    	$data = Article::find(1);//返回一个对象
    	//$data->comment是取出该文章的所有评论
    	foreach($data->comment as $v){
    		echo  $v->content.'<br/>';
    	}

    }*/
    /*public function demo(){
    	//取出所有的作者数据,也顺便取出该作者写的文章。
    	$data = Author::all();
    	foreach($data as $v){
    		echo $v->name.'---'.$v->article->title.'<br/>';
    	}

    }*/
    /*public function demo(){
    	//取出所有的文章数据,也顺便取出该文章的作者。
    	$data = Article::all();
    	foreach($data as $v){
    		echo $v->title.'---'.$v->author->name.'<br/>';
    	}

    }*/
    public function registerok(){
    	echo 'ok';
    }
}
