<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
class DemoController extends Controller
{
    public function demo(){
    	//接收传递的name
    	$name = Input::get('name');
    	echo $name;
    	echo "<hr>";
    	//接收全部的输入
    	$data = Input::all();
    	echo "<pre>";
    	print_r($data);
    	echo "<hr>";
    	//只接收name和age
    	$data = Input::only(['name','age']);
    	echo "<pre>";
    	print_r($data);
    	echo "<hr>";
    	//除了name以外其他都接收
    	$data = Input::except('name');
    	echo "<pre>";
    	print_r($data);
    	echo "<hr>";
    	//判断是否传递id
    	var_dump(Input::has('id'));
    }
    public function add(){
    	echo  'I am admin-demo-add';
    }
    public function del(){
    	echo  'I am admin-demo-del';
    }
    public function update(){
    	echo  'I am admin-demo-update';
    }
}
