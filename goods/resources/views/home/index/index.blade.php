<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('admins')}}/style/css/ch-ui.admin.css">
    <link rel="stylesheet" href="{{asset('admins')}}/style/font/css/font-awesome.min.css">
    <script type="text/javascript" src="/js/jquery.js"></script>
</head>
<body style="background:#F3F3F4;">
<div class="login_box">
    <h2>测试test模块</h2>
    {{--<div class="form" style="width:248px;">
        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <div style="color:red;text-align: left">{{$error}}</div>
            @endforeach
        @endif
        <form action="{{url('admin/login_check')}}" method="post">
            {{csrf_field()}}
            <ul>
                <li>
                    <input type="text" name="username" class="text" value="{{old('username')}}" />
                    <span><i class="fa fa-user"></i></span>
                </li>
                <li>
                    <input type="password" name="password" class="text"/>
                    <span><i class="fa fa-lock"></i></span>
                </li>
                <li>
                    <input type="text" class="code" name="captcha" value="{{old('captcha')}}"/>
                    <span><i class="fa fa-check-square-o"></i></span>
                    <img id="captcha" src="{{captcha_src()}}" style="cursor:pointer" alt="">
                </li>
                <li>
                    <input type="checkbox" value="1" name="online" id="remember" /><label for="remember">请保存我这次的登录信息。</label>
                </li>
                <li>
                    <input type="submit" value="立即登陆"/>
                </li>
            </ul>
        </form>
        <p><a href="#">返回首页</a> &copy; 2016 Powered by <a href="http://www.abc.com" target="_blank">http://www.abc.com</a></p>
    </div>--}}
</div>
</body>
</html>
<script type="text/javascript">
    $("#captcha").click(function(){
        $(this).attr('src',"{{captcha_src()}}/"+Math.random());
    });
</script>