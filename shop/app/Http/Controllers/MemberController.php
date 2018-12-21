<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MemberController extends Controller
{
    
	/*public function demo(){
		$name = '小宝';
		$age = 12;
		$data = compact('name','age');
		echo '<pre>';
		print_r($data);
	}*/
	public function demo(){
		$age = 20;
		$stus = [
			['name'=>'李逵','age'=>12],
			['name'=>'宋江','age'=>22],
			['name'=>'杨过','age'=>32],
		];
		$data = DB::table('member')->get();
		//加载视图 
		//return view('admin.index.demo',['age'=>$age,'stus'=>$stus,'data'=>$data]);
		return view('admin.index.demo',compact('age','stus','data'));
	}
	/*public function demo(){
		$name = '韦小宝';
		$age = 12;
		$time = time();
		$str = 'abc123';
		$title = "<a href='http://www.baidu.com'>百度</a>";
		//加载视图 
		return view('demo',['name'=>$name,'age'=>$age,'time'=>$time,'str'=>$str,'title'=>$title]);
	}*/
    public function del(){
    	$res = DB::table('member')->where('id','1')->delete();
    	var_dump($res);
    }
    //查询数据
    public function index(){
    	$data =  DB::select('select * from member');
    	echo '<pre>';
    	print_r($data);
    }
    /*public function index(){
    	$info = DB::table('member')->limit(3)->offset(1)->get();
    	echo '<pre>';
    	print_r($info);
    }*/
    /*public function index(){
    	$info = DB::table('member')->where('id','>',3)->select('id','age')->orderBy('age','asc')->get();
    	echo '<pre>';
    	print_r($info);
    }*/
    /*public function index(){
    	$info = DB::table('member')->select('name','age')->get();
    	echo '<pre>';
    	print_r($info);
    }*/
    /*public function index(){
    	$info = DB::table('member')->where('id','=','2')->value('name');
    	echo '<pre>';
    	print_r($info);
    }*/
    /*public function index(){
    	$info = DB::table('member')->where('id',1)->first();//返回值是一个对象
    	echo $info->name;
    	echo '<pre>';
    	print_r($info);
    }*/
    /*public function index(){
    	$data = DB::table('member')->where('id','<',5)->get();//返回的是一个集合，集合中包含多个对象（每条记录是一个对象）
    	//遍历
    	foreach($data as $v){
    		echo $v->name.'--'.$v->age.'--'.$v->email.'<br/>';
    	}
    	echo '<pre>';
    	print_r($data);
    }*/
    //添加数据
    public function add(){
    	$res = DB::statement("insert into member values(null,'小宝',12,'xiaobao@sohu.com')");
    	var_dump($res);
    }
    /*public function add(){
    	$res = DB::table('member')->insert([
    		[
    			'name'=>'采臣',
    			'age'=>18,
    			'email'=>'xiaocai@sohu.com'
    		],
    		[
    			'name'=>'小倩',
    			'age'=>18,
    			'email'=>'xiaoqian@sohu.com'
    		],
    		[
    			'name'=>'小霞',
    			'age'=>58,
    			'email'=>'xiaoxia@sohu.com'
    		],
    	]);
    	var_dump($res);
    }*/
    //修改操作
    public function update(){
    	//把id=1的记录的名称改名为xiaoqian
    	//$res = DB::table('member')->where('id',1)->update(['name'=>'xiaoqian']);
    	//把id=1的记录的年龄增加10岁
    	$res = DB::table('member')->where('id',1)->increment('age', 10);
    	dd($res);
    }
    /*public function add(){
    	$res = DB::table('member')->insertGetId([
    			'name'=>'熊大',
    			'age'=>12,
    			'email'=>'xiongda@sohu.com'
    	]);
    	var_dump($res);
    }*/
}
