<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Article;
use App\Author;
use Illuminate\Support\Facades\Validator;

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
            //定义验证规则
            $rules  = [
                'title'     =>'required|unique:article,title',
                'content'   =>'required',
                'author_id' =>'required|integer',
                'price'     =>'required|integer'
            ];

            //定义一个错误提示
            $msgs   =[
                'title.required'    =>'文章名称不能为空',
                'title.unique'      =>'文章名称已存在',
                'content.required'  =>'文章内容不能为空',
                'author_id.required'=>'作者不能为空',
                'price.required'    =>'价格信息不能为空',
                'price.integer'     =>'价格必须是整数'
            ];

            //使用Validator类验证
            $validator  = Validator::make($request->all(),$rules,$msgs);
            if ($validator->passes()){
                $res    = Article::create($request->input());
                if ($res){
                    return redirect('admin/article/add');
                }else{
                    //添加失败
                    //return redirect('admin/article/add');
                    return back()->withErrors(['error'=>'添加失败']);
                    //使用withErrors把错误信息，添加到$errors对象里面了
                }
            }else{
                return back()->withErrors($validator);
            }
        }
    }

    public function del(Request $request){
        $id             = $request->input('id');
        var_dump($id);die;
    }

}
