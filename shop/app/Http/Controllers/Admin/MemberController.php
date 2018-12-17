<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member;
class MemberController extends Controller
{
	public function index(){
    	$data = Member::paginate(3);
    	return view('admin.member.index',compact('data'));
    }
	public function del($id){
		///取出被删除的数据,返回的是一个对象
		$info = Member::find($id);//
		$info->delete();
		return redirect('admin/member/index');
	}
	public function update($id){
			//取出被修改的数据
			$info = Member::find($id);//返回当前修改数据的对象
			return view('admin.member.update',compact('info'));
	}
	public function updateok(Request $request){
			//要取出被修改的数据
			$info = Member::find($request->input('id'));
			$info->name = $request->input('name');
			$info->age = $request->input('age');
			$info->email=$request->input('email');
			$res = $info->save();
			//var_dump($info->save());//返回值是布尔类型
			if($res){
				//修改成功
				return redirect('admin/member/index');
			}else {
				//修改失败
				return redirect('admin/member/update/'.$request->input('id'));
			}
	}
    /*public function index(){
    	//$data = Member::orderBy("age",'asc')->get();
    	//$data = Member::offset(0)->limit(2)->get();
    	$data = Member::skip(0)->take(4)->get();
    	echo '<pre>';
    	print_r($data);exit;
    	return view('admin.member.index',compact('data'));
    }*/
   
   /* public function index(){
    	 $info = Member::where('name','小宝')->first();//返回id=4记录的对象
    	 echo $info->name;
    	 echo "<hr>";
    	 echo '<pre>';
    	 print_r($info);
    	 echo '<hr>';
    }*/
    /*public function index(){
    	 $info = Member::find(4);//返回id=4记录的对象
    	 echo $info->name;
    	 echo "<hr>";
    	 echo '<pre>';
    	 print_r($info);
    	 echo '<hr>';

    }*/
    public function add(){
    	return view('admin.member.add');
    }
    public function addok(Request $request){
    	$this->validate($request,[
    		'name'=>'required|min:3|unique:member,name',
    		'password'=>'required|between:6,12|confirmed',
    		'password_confirmation'=>'required|between:6,12',
    		'age'=>'required|integer|min:18|max:98',
    		'email'=>'required|email'
    	]);
    	//接收传递的所有数据
    	$data = $request->all();
    	//接收上传的文件
    	$file = $request->file('face');//获取上传的文件
    	if($request->hasFile('face') && $file->isValid()){
    		//表示文件已经上传成功，获取文件的一些信息
    		//获取上传文件的后缀（扩展名称）、
    		$ext = $file->getClientOriginalExtension();
    		//获取上传文件的原来的名称
    		$oriname = $file->getClientOriginalName();
    		//获取上传文件的大小
    		$filesize = $file->getClientSize();
    		//完成上传操作了
    		//定义上传文件的新名称
    		$dir = date('Y/m/d/');
    		$filename = time().rand(1000,9999).'.'.$ext;
    		//$file->move(保存文件的路径，上传文件的名称);
    		$file->move('./uploads/'.$dir,$filename);
    		$data['face']='/uploads/'.$dir.$filename;
    	}
    	$info =  Member::create($data);//返回的数据就是当前插入记录的一个对象
    	if($info){	
			return redirect('admin/member/index')->with('msg','添加成功');
		}else {
			return redirect('admin/member/add')->with('msg','添加失败');
		}
    	
    }
    /*public function addok(Request $request){
    	//Request $request等价于$request = new Request();
    	//完成入库操作
    	//获取所有的数据
    	$data = $request->all();
    	echo '<pre>';
    	print_r($data);
    	echo '<hr>';
    	//单独获取name数据
    	$name = $request->input('name');
    	var_dump($name);
    	echo '<hr>';
    	//只获取name和age的数据
    	$info = $request->only(['name','age']);
    	echo '<pre>';
    	print_r($info);
    	echo '<hr>';
    	//除了_token其他的都接收
    	$info = $request->except('_token');
    	echo '<pre>';
    	print_r($info);
    	echo '<hr>';
    	//判断是否有id提交
    	var_dump($request->has('id'));

    }*/


    /*public function add(){
    	$member = new Member();
    	$member->name = '李莫愁';
    	$member->age = 12;
    	$member->email = 'limochou@sohu.com';
    	$res = $member->save();//返回布尔值
    	var_dump($res);
    }*/
}
