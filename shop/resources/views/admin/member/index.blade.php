<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>新建网页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" type="text/css" href="{{asset('css/page.css')}}">
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript">
$(function(){
    $("#showmsg").fadeOut(2000);
})
</script>

<style type="text/css">
</style>
</head>
    <body>
    @if(Session::has('msg'))
        <div id="showmsg" style="width: 800px;background: pink;">{{Session::get('msg')}}</div>
    @endif
            <table>
                <tr>
                    <td>姓名</td>
                    <td>年龄</td>
                    <td>邮箱</td>
                    <td>操作</td>
                </tr>
                @foreach($data as  $v)
                <tr>
                    <td>{{$v->name}}</td>
                    <td>{{$v->age}}</td>
                    <td>{{$v->email}}</td>
                    <td>
                        <a href="/admin/member/update/{{$v->id}}">修改</a>|
                        <a href="{{url('admin/member/del/'.$v->id)}}">删除</a>
                    </td>
                </tr>
                @endforeach
                <tr><td>总记录数{{$data->total()}},当前页{{$data->currentPage()}}</td>
                <td colspan="3">
                {{$data->links('admin.member.default')}}
                </td></tr>
            </table>
        </form>
    </body>
</html>
