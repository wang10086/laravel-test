<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Article;
use App\Author;

class ArticleController extends Controller
{
    //文章列表
    public function index(){
        $nave   = [
            'nave1' => '首页',
            'nave2' => '文章管理',
            'nave3' => '文章列表',
        ];
        $lists      = Article::with('author')->get();
        //$lists      = DB::table('article')->get();
        //$lists      = Article::author();
        //echo '<pre>';
        //var_dump($lists);
        return view('admin.article.index',compact('lists','nave'));
    }

    public function add(){

        return view('admin/article.addArticle');
    }

}
