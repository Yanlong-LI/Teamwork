<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name','home')}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .affiche> ol > li {
            margin-top: 25px;
            font-size: 12px;
            letter-spacing: .2rem;
            text-decoration: none;
            text-transform: uppercase;
            /*padding-top: 15px;*/
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/home') }}">首页</a>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @else
                <a href="{{ url('/login') }}">登陆</a>
                <a href="{{ url('/register') }}">注册</a>
            @endif
        </div>
    @endif

    <div class="content">

        <div class="title m-b-md">
            烟笼里官网
        </div>
        <div class="title">
            让世界无尽可能
        </div>

        <div class="links">
            <a href="{{url('blog')}}">blog</a>
            <a href="{{url('team')}}">团队管理</a>
            <a href="{{url('news')}}">news</a>
            <a href="{{url('about')}}">about</a>
            <a href="https://github.com/Yanlong-LI" target="_blank">GitHub</a>
        </div>
        <div class="affiche">
            <ol type="A">
                <li>官网同步更新中</li>
                <li>架构数据库确认</li>
                <li>官网编写语言及框架确认</li>
                <li>网站需求规划</li>
                <li>网站重构方案编写</li>
            </ol>
        </div>
    </div>
</div>
</body>
</html>
