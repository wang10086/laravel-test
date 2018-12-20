<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//Route::get('demo','Admin\AdminController@demo');
Route::get('demo','DemoController@demo');
Route::get('getArticle','DemoController@getarticle');

Route::get('setcache','DemoController@setcache');
Route::get('getcache','DemoController@getcache');
Route::get('delcache','DemoController@delcache');

Route::get('setsession','DemoController@setsession');
Route::get('getsession','DemoController@getsession');
Route::get('delsession','DemoController@delsession');


Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
	Route::get('login','AdminController@login');
	Route::post('login_check','AdminController@login_check');
	//如下路由请求时，要通过login中间件的验证
	Route::group(['middleware'=>'login'],function(){
		Route::get('index','IndexController@index');
		Route::get('info','IndexController@info');
		Route::get('logout','AdminController@logout');
		//商品管理模块
		//添加商品的路由
		Route::match(['post','get'],'goods/add','GoodsController@add');
		//商品列表的路由
		Route::get('goods/index','GoodsController@index');
		Route::get('goods/add','GoodsController@add');
		//商品修改的路由
		Route::match(['get','post'],'goods/update/{goods}','GoodsController@update');
		//商品删除的路由
		Route::post('goods/del','GoodsController@del');
		//完成上传图片
		Route::post('goods/upimg','GoodsController@upimg');

        //文章
        Route::get('article/index','ArticleController@index');
        Route::match(['get','post'],'article/add','ArticleController@add');
        Route::post('article/del','ArticleController@del');
	});
});
Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'home','namespace'=>'Home'],function (){
    //测试首页
    Route::get('index','IndexController@index');
});
