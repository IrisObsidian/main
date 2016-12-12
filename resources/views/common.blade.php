<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css')}}">
</head>
<body>
{{--公共导航栏--}}
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#example-navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{'/'}}">{{config('app.name')}}</a>
        </div>
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"></span>&nbsp;首页</a></li>
                @if(\Illuminate\Support\Facades\Auth::guest())
                    <li><a href="#"><span class="glyphicon glyphicon-picture"></span>&nbsp;相册</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-picture"></span>&nbsp;相册<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">添加</a></li>
                            <li><a href="#">查看</a></li>
                        </ul>
                    </li>
                @endif
                <li><a href="#"><span class="glyphicon glyphicon-send"></span>&nbsp;留言</a></li>
                @if(\Illuminate\Support\Facades\Auth::guest())
                    <li><a href="{{url('Login')}}"><span class="glyphicon glyphicon-log-in"></span>&nbsp;登录</a></li>
                @else
                    <li><a href="{{url('Logout')}}"><span class="glyphicon glyphicon-log-in"></span>&nbsp;退出</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
{{--页面body--}}
<div class="container-fluid" style="padding-left: 1.7em;padding-right: 1.5em;padding-top: 65px;">
    <div class="row">@yield('content')</div>
</div>
{{--在body闭合标签前引入js文件--}}
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.form.js')}}"></script>
<script src="{{asset('layer/layer.js')}}"></script>
<script src="{{asset('js/vue.js')}}"></script>
</body>
{{--页面的js代码--}}
@yield('script')
</html>