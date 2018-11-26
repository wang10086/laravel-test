<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{asset('admins')}}/style/css/ch-ui.admin.css">
	<link rel="stylesheet" href="{{asset('admins')}}/style/font/css/font-awesome.min.css">
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script src="{{asset('admins')}}/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('admins')}}/uploadify/uploadify.css">
<style>
    .uploadify{display:inline-block;}
    .uploadify-button{border:none; border-radius:5px; margin-top:8px;}
    table.add_tab tr td span.uploadify-button-text{color: #FFF; margin:0;}
</style>
</head>
<body>
    <!--面包屑导航 开始-->
    <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">商品管理</a> &raquo; 添加商品
    </div>
    <!--面包屑导航 结束-->

	<!--结果集标题与导航组件 开始-->
	<div class="result_wrap">
        <div class="result_title">
            <h3>快捷操作</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="#"><i class="fa fa-plus"></i>新增文章</a>
                <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
                <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
            </div>
        </div>
    </div>
    <!--结果集标题与导航组件 结束-->
    
    <div class="result_wrap">
    @if(count($errors)>0)
        @foreach($errors->all() as $error)
            <div style="width: 800px;color: red;background: gray;">{{$error}}</div>
        @endforeach
    @endif
        <form action="{{url('admin/goods/update/'.$goods->id)}}" method="post">
            <table class="add_tab">
                <tbody>
                {{csrf_field()}}
                    <tr>
                        <th width="120"><i class="require">*</i>栏目：</th>
                        <td>
                            <select name="cat_id">
                                <option value="">==请选择==</option>
                                @foreach($category as $k=>$v)
                                    @if($goods->cat_id==$k)
                                        <option selected="selected" value="{{$k}}">{{$v}}</option>
                                    @else
                                        <option  value="{{$k}}">{{$v}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>商品名称：</th>
                        <td>
                            <input type="text" class="lg" name="goods_name" value="{{$goods->goods_name}}">
                            <p>标题可以写30个字</p>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>价格：</th>
                        <td>
                            <input type="text" class="sm" name="goods_price" value="{{$goods->goods_price}}">元
                            <span><i class="fa fa-exclamation-circle yellow"></i>这里是短文本长度</span>
                        </td>
                    </tr>
                    <tr>
                        <th><i class="require">*</i>缩略图：</th>
                        <td>
                        <input type="text" size="100" readonly="readonly" name="goods_thumb" value="{{$goods->goods_thumb}}">
                        <input id="file_upload" name="file_upload" type="file" multiple="true"></td>
                    </tr> 
                    <tr>
                        <th></th>
                        <td>
                            <img src='{{$goods->goods_thumb}}' id="showimg" style="width: 150px;" />
                        </td>
                    </tr>              
                    <tr>
                        <th>详细内容：</th>
                        <td>
                            <textarea class="lg" name="goods_desc">{{$goods->goods_desc}}</textarea>
                            <p>标题可以写30个字</p>
                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <input type="submit" value="提交">
                            <input type="button" class="back" onclick="history.go(-1)" value="返回">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

</body>
</html>
<script type="text/javascript">
    $(function() {
            $('#file_upload').uploadify({
                'formData'     : {
                    '_token'     : '{{csrf_token()}}'
                },
                'buttonText' : '选择文件',
                'swf'      : '{{asset('admins')}}/uploadify/uploadify.swf',
                'uploader' : '{{url("admin/goods/upimg")}}',
                'onUploadSuccess' : function(file, data, response) {
                        $("input[name=goods_thumb]").val(data);
                        $("#showimg").attr('src',data).css('width','150px');
                }
            });
    });
</script>