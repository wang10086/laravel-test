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
    	return view('admin.index.info');
    }
}
