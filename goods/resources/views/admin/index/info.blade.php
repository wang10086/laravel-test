<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{asset('admins')}}/style/css/ch-ui.admin.css">
	<link rel="stylesheet" href="{{asset('admins')}}/style/font/css/font-awesome.min.css">
</head>
<body>
	<!--面包屑导航 开始-->
	<div class="crumb_warp">
		<!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
		<i class="fa fa-home"></i> <a href="javascript:;">{{$nave['nave1']}}</a> &raquo; <a href="javascript:;">{{$nave['nave2']}}</a> &raquo;{{$nave['nave3']}}
	</div>
	<!--面包屑导航 结束-->
	
	<!--结果集标题与导航组件 开始-->
	{{--<div class="result_wrap">
        <div class="result_title">
            <h3>快捷操作</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="javascript:;"><i class="fa fa-plus"></i>新增文章</a>
                <a href="javascript:;"><i class="fa fa-recycle"></i>批量删除</a>
                <a href="javascript:;"><i class="fa fa-refresh"></i>更新排序</a>
            </div>
        </div>
    </div>--}}
    <!--结果集标题与导航组件 结束-->

	
    <div class="result_wrap">
        <div class="result_title">
            <h3>系统基本信息</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    <label>操作系统</label><span>{{$envs['Uname']}}</span>
                </li>
                <li>
                    <label>PHP version</label><span>{{$envs['PHP version']}}</span>
                </li>
                <li>
                    <label>Laravel version</label><span>{{$envs['Laravel version']}}</span>
                </li>
                <li>
                    <label>Server</label><span>{{$envs['Server']}}</span>
                </li>
                <li>
                    <label>Cache driver</label><span>{{$envs['Cache driver']}}</span>
                </li>
                <li>
                    <label>Session driver</label><span>{{$envs['Session driver']}}</span>
                </li>
                <li>
                    <label>Session driver</label><span>{{$envs['Session driver']}}</span>
                </li>
                <li>
                    <label>Timezone</label><span>{{$envs['Timezone']}}</span>
                </li>
                <li>
                    <label>服务器域名/IP</label><span>{{$envs['Locale']}}</span>
                </li>
                <li>
                    <label>北京时间</label><span>{{$envs['time']}}</span>
                </li>
                <li>
                    <label>Env</label><span>{{$envs['Env']}}</span>
                </li>
                <li>
                    <label>URL</label><span>{{$envs['URL']}}</span>
                </li>
                <li>
                    <label>CGI</label><span>{{$envs['CGI']}}</span>
                </li>
            </ul>
        </div>
    </div>


    <div class="result_wrap">
        <div class="result_title">
            <h3>使用帮助</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    <label>官方交流网站：</label><span><a href="javascript:;">http://bbs.abc.com</a></span>
                </li>
                <li>
                    <label>官方交流QQ群：</label><span><a href="javascript:;"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png"></a></span>
                </li>
            </ul>
        </div>
    </div>
	<!--结果集列表组件 结束-->

</body>
</html>