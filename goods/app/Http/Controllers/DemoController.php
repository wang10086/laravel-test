<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Cache;
use DB;
use Session;
class DemoController extends Controller
{
    public function demo(){
    	//$a = env('DB_DATABASE');
    	//echo $a;
    	//$a = config('filesystems.disks.s3.secret');
    	//echo $a;
    	//DB::connection()->enableQueryLog();//开启sql语句日志记录
		$data = DB::table('goods')->where('id','1')->get();
		//$query = DB::getQueryLog();//获取执行的sql语句
		//print_r($query);

    }
    public function setsession(){
    	//Session::put('name','王刚');
    	//Session::put('age',12);
    	Session::flash('username','李莫愁');
    }
    public function getsession(){
    	$name = Session::get('username','李逵');
    	echo $name.'<hr>';
    	/*$age = Session::get('age');
    	echo $age.'<hr/>';
    	$data = Session::all();
    	dd($data);*/
    }
    public function delsession(){
    	Session::forget('name');
    }


    public function setcache(){
    	Cache::put('username','宋江',10);
    }
    public function getcache(){
    	$data = Cache::get('username',function(){
    			return DB::table('goods')->get();
    	});
    	dd($data);
    }
    public function delcache(){
    	Cache::forget('username');
    }
}
