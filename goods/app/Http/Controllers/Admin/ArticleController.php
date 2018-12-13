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
        $lists      = Article::with('author')->get();
        echo '<pre>';
        var_dump($lists);
    }

}
