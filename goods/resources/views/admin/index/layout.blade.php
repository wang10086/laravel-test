<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('admins')}}/style/css/ch-ui.admin.css">
    <link rel="stylesheet" href="{{asset('admins')}}/style/font/css/font-awesome.min.css">
    <script type="text/javascript" src="/admins/style/js/jquery.js"></script>
    <script type="text/javascript" src="{{asset('admins')}}/style/js/ch-ui.admin.js"></script>
    <!--[if lt IE 9]-->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- <![endif]--> -->
</head>
<body>
<!--头部 开始-->
<div class="top_box">
    <div class="top_left">
        <div class="logo">后台管理模板</div>
        <ul>
            <li><a href="#" class="active">首页</a></li>
            <li><a href="#">管理页</a></li>
        </ul>
    </div>
    <div class="top_right">
        <ul>
            <li>管理员：{{Auth::guard('admin')->user()->username}}</li>
            <li><a href="pass.html" target="main">修改密码</a></li>
            <li><a href="{{url('admin/logout')}}">退出</a></li>
        </ul>
    </div>
</div>
<!--头部 结束-->

<!--左侧导航 开始-->
<div class="menu_box">
    <ul>
        <li>
            <h3><i class="fa fa-fw fa-clipboard"></i>商品管理</h3>
            <ul class="sub_menu">
                <li><a href="{{url('admin/goods/index')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>列表页</a></li>
                <li><a href="{{url('home/index')}}" target="main"><i class="fa fa-fw fa-list-alt"></i>tab页</a></li>
                <li><a href="img.html" target="main"><i class="fa fa-fw fa-image"></i>图片列表</a></li>
            </ul>
        </li>
        <li>
            <h3><i class="fa fa-fw fa-cog"></i>系统设置</h3>
            <ul class="sub_menu">
                <li><a href="javascript:;" target="main"><i class="fa fa-fw fa-cubes"></i>网站配置</a></li>
                <li><a href="javascript:;" target="main"><i class="fa fa-fw fa-database"></i>备份还原</a></li>
            </ul>
        </li>
        <li>
            <h3><i class="fa fa-fw fa-thumb-tack"></i>工具导航</h3>
            <ul class="sub_menu">
                <li><a href="https://www.baidu.com" target="main"><i class="fa fa-fw fa-plus-square"></i>百度</a></li>
                <li><a href="https://9iphp.com/fa-icons" target="main"><i class="fa fa-fw fa-font"></i>图标调用</a></li>
                <li><a href="http://hemin.cn/jq/cheatsheet.html" target="main"><i class="fa fa-fw fa-chain"></i>Jquery手册</a></li>
                <li><a href="http://tool.c7sky.com/webcolor/" target="main"><i class="fa fa-fw fa-tachometer"></i>配色板</a></li>
            </ul>
        </li>
        <li>
            <h3><i class="fa fa-cogs"></i>系统管理</h3>
            <ul class="sub_menu">
                <li><a href="JavaScript:;" target="main"><i class="fa fa-angle-right"></i>用户管理</a></li>
                <li><a href="JavaScript:;" target="main"><i class="fa fa-angle-right"></i>角色管理</a></li>
                <li><a href="javascript:;" target="main"><i class="fa fa-angle-right"></i>节点管理</a></li>
                <li><a href="element.html" target="main"><i class="fa fa-fw fa-tags"></i>其他组件</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--左侧导航 结束-->

    @yield('main');

<!--底部 开始-->
<div class="bottom_box">
    CopyRight © 2017. Powered By <a href="http://www.baidu.com">http://www.baidu.com</a>.
</div>
<!--底部 结束-->
</body>
</html>