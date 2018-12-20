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

    public function add(Request $request){
        if($request->isMethod('get')){
            $where          = array();
            $where['sex']   = '女';
            $authors        = Author::where($where)->pluck('name','id');
            return view('admin/article.addArticle',compact('authors'));
        }elseif ($request->isMethod('post')){
            var_dump($_POST);die;
        }
    }

    public function del(Request $request){
        $id             = $request->input('id');
        var_dump($id);die;
    }

}
