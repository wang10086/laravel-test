<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin;
//use Illuminate\Support\Facades\Auth;
use Auth;
class AdminController extends Controller
{
    public function login(){
    	//显示登录的页面
    	return view('admin.admin.login');
    }
    public function login_check(Request $request){
    	//进行数据验证
    	$this->validate($request,[
    		'username'=>'required|min:3|max:16|regex:/^[a-zA-Z1-9\x{2e80}-\x{9FFF}]*$/u',
    		'password'=>'required|between:6,12',
    		'captcha'=>'required|size:4|captcha'
    	]);
        //验证输入的用户名和密码是否正确
        $data = $request->only(['username','password']);
        $res = Auth::guard('admin')->attempt($data,$request->has('online'));
        if($res){
        	//登录成功，进入后台首页
        	return redirect('admin/index');
        }else {
        	//登录失败，返回到登录页面，并输出错误提示
        	return redirect('admin/login')->withErrors([
        			'error'=>'用户名或密码错误'
        		]);
        	//withErrors错误信息，直接存储到$errors对象里面。
        }
    }
    public function logout(){
    	Auth::guard('admin')->logout();
    	return redirect('admin/login');
    }
}
