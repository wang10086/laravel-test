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
        $envs   = $this->get_sys();
    	return view('admin.index.info',compact('nave','envs'));
    }

    private function get_sys(){
        $envs = [
            'PHP version'          => 'PHP/'.PHP_VERSION,
            'Laravel version'      => app()->version(),
            'CGI'                  => php_sapi_name(),
            'Uname'                => php_uname(),
            'Server'               => array_get($_SERVER, 'SERVER_SOFTWARE'),
            'Cache driver'         => config('cache.default'),
            'Session driver'       => config('session.driver'),
            'Queue driver'         => config('queue.default'),
            'Timezone'             => config('app.timezone'),
            'Locale'               => config('app.locale'),
            'Env'                  => config('app.env'),
            'URL'                  => config('app.url'),
            'time'                 => date("Y-m-d H:i:s",time()),
        ];
        return $envs;
    }
}
