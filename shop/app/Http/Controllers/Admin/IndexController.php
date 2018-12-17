<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class IndexController extends Controller
{
    public function index(){
    	$data  = DB::table('member')->get();
    	return view('admin.index.index',compact('data'));
    }
    public function detail(){
    	$name =  '苹果手机';
    	return view('admin.index.detail',compact('name'));
    }
}
