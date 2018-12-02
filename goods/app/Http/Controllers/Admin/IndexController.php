<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
    	return view('admin.index.index');
    }
    public function info(){
        $nave   = [
            'nave1' => '首页',
            'nave2' => '基本信息',
            'nave3' => '详情',
        ];
    	return view('admin.index.info',compact('nave'));
    }
}
