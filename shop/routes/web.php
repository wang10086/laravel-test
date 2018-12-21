<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('demo','DemoController@demo');









Route::post('demo/registerok','DemoController@registerok');




Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
	//添加会员的路由
	Route::get('member/add',"MemberController@add");
	Route::post('member/addok',"MemberController@addok");
	//修改会员的路由
	Route::get('member/update/{id}',"MemberController@update");
	Route::post('member/updateok',"MemberController@updateok");
	//删除会员的路由
	Route::get('member/del/{id}','MemberController@del');
	//会员列表的路由
	Route::get('member/index','MemberController@index');
});






/*Route::get('admin/index','Admin\IndexController@index');



Route::get('admin/detail','Admin\IndexController@detail');



Route::get('demo','MemberController@demo');
Route::get('member/add','MemberController@add');
Route::get('member/index','MemberController@index');
Route::get('member/update','MemberController@update');
Route::get('member/del','MemberController@del');
*/

//Route::get('demo',"Admin\DemoController@demo");


/*Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
	Route::get('add',"DemoController@add");
	Route::get('update',"DemoController@update");
	Route::get('del',"DemoController@del");
});
Route::group(['namespace'=>'Home'],function(){
	Route::get('add',"DemoController@add");
	Route::get('update',"DemoController@update");
	Route::get('del',"DemoController@del");
});*/




/*
Route::group(['prefix'=>'admin'],function(){
	Route::get('add',function(){
		return 'add';
	});
	Route::get('del',function(){
		return 'del';
	});
	Route::get('update',function(){
		return 'update';
	});
	Route::get('index',function(){
		return 'index';
	});
});*/

/*Route::get('admin/add',function(){
	return 'add';
});
Route::get('admin/del',function(){
	return 'del';
});
Route::get('admin/update',function(){
	return 'update';
});
Route::get('admin/index',function(){
	return 'index';
});*/






/*Route::get('/user/{name}/{id}', function ($name,$id) {
   	 return '你输入的数字是：'.$id.'名称是'.$name;
})->where(['name'=>'[a-zA-Z]+','id'=>'\d+']);




Route::get('/admin/user/del/{id}', function ($id=90) {
   	 return '你输入的数字是：'.$id;
})->where('id','\d+');*/

/*Route::get('/admin/user/del/{id?}', function ($id=90) {
   	 return '你输入的数字是：'.$id;
});*/




/*//如下定义的该路由，即适合于get和post
Route::match(['post','get'],'/home/index',function(){
	return 'hello welcome';
});
//使用any不限制请求的方式，任何请求都可以访问
Route::any('/home/demo',function(){
	return 'hello -demo';
});*/




/*Route::get('/admin', function () {
    //return view('welcome');
    return 'hello-admin';
});
Route::get('/admin/user/add', function () {
    //return view('welcome');
    return 'admin-user-add';
});
Route::get('/admin/user/del', function () {
    //return view('welcome');
    return 'admin-user-del';
});*/
