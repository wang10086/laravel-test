<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>新建网页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<script type="text/javascript">

</script>

<style type="text/css">
</style>
</head>
    <body>
        @if(count($errors)>0)
            <div style="width: 800px;background: gray;">
                @foreach($errors->all() as $error)
                        {{$error}}<br/>
                @endforeach
            </div>
        @endif
        <form action="{{url('/admin/member/addok')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
            <table>
                <caption><h2>添加会员</h2></caption>
                <tr>
                    <td>姓名</td>
                    <td><input type="text" name="name" value="{{old('name')}}"></td>
                </tr>
                <tr>
                    <td>密码</td>
                    <td><input type="text" name="password" value="{{old('password')}}"></td>
                </tr>
                 <tr>
                    <td>确认密码</td>
                    <td><input type="text" name="password_confirmation" value="{{old('password_confirmation')}}"></td>
                </tr>
                 <tr>
                    <td>年龄</td>
                    <td><input type="text" name="age" value="{{old('age')}}"></td>
                </tr>
                <tr>
                    <td>邮箱</td>
                    <td><input type="text" name="email" value="{{old('email')}}"></td>
                </tr>
                <tr>
                    <td>头像</td>
                    <td><input type="file" name="face"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="添加"><input type="reset" value="取消"></td>
                </tr>
            </table>
        </form>
    </body>
</html>