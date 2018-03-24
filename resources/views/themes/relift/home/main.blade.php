<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="{{ setting('site.title') }}" />
    <meta name="description" content="{{ setting('site.description') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ setting('site.title') }}</title>
    <link rel="icon" href="{{ media(setting('site.logo')) }}" type="image/x-icon"/>

    {!! html_css('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Ico') !!}
    {!! html_css('/vendor/material-kit/css/font-awesome.min.css') !!}
    {!! html_css('/vendor/material-kit/css/material-icon.css') !!}
    {!! html_css('/vendor/material-kit/css/material-kit.min.css') !!}
    {!! html_css('/vendor/video/css/video-js.min.css') !!}
</head>
<body>
<nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ url('/index.html') }}">{{ setting('site.title') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ url('/index.html') }}" class="nav-link">
                        <i class="material-icons">home</i> 首页
                    </a>
                </li>
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="material-icons">apps</i> 用户中心
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <a href="{{ url('user/' . Auth::user()->name . '.html') }}" class="dropdown-item">
                            <i class="material-icons">layers</i> 用户信息
                        </a>
                    </div>
                </li>
                @if(Auth::check())
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <i class="material-icons">code</i> 工具
                        </a>
                        <div class="dropdown-menu dropdown-with-icons">
                            <a href="{{ url('vainglory.html') }}" class="dropdown-item">
                                <i class="material-icons">layers</i> 虚荣战绩查询
                            </a>
                        </div>
                    </li>
                @endif
                @if(Auth::check())
                    @if(Auth::user()->role_id = 1)
                        <li class="button-container nav-item">
                            <a href="{{ url('admin') }}" class="btn btn-info btn-round btn-block">
                                <i class="material-icons">mood</i> 后台管理
                            </a>
                        </li>
                    @endif
                @endif
                <li class="button-container nav-item">
                    @if(! Auth::check())
                        <a href="{{ url('login.html') }}" class="btn btn-rose btn-round btn-block">
                            <i class="material-icons">mood</i> 用户登录
                        </a>
                    @else
                        <a href="{{ url('logout.html') }}" class="btn btn-rose btn-round btn-block">
                            <i class="material-icons">sentiment_very_dissatisfied</i> 退出
                        </a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield('body')
{!! html_js('/vendor/material-kit/js/jquery-3.2.1.min.js') !!}
{!! html_js('/vendor/material-kit/js/popper.min.js') !!}
{!! html_js('/vendor/material-kit/js/bootstrap-material-design.min.js') !!}
{!! html_js('/vendor/material-kit/js/moment.min.js') !!}
{!! html_js('/vendor/material-kit/js/bootstrap-selectpicker.js') !!}
{!! html_js('/vendor/material-kit/js/bootstrap-tagsinput.js') !!}
{{--{!! html_js('/vendor/material-kit/js/jasny-bootstrap.min.js') !!}
{!! html_js('/vendor/material-kit/js/jquery.flexisel.js') !!}
{!! html_js('/vendor/material-kit/js/bootstrap-datetimepicker.js') !!}
{!! html_js('/vendor/material-kit/js/nouislider.min.js') !!}
{!! html_js('/vendor/material-kit/js/modernizr.js') !!}
{!! html_js('/vendor/material-kit/js/vertical-nav.js') !!}--}}
{!! html_js('/vendor/material-kit/js/material-kit.min.js') !!}
{!! html_js('/vendor/material-kit/js/material-kit-demo.js') !!}
{!! html_js('/vendor/video/js/video.min.js') !!}
</body>
</html>