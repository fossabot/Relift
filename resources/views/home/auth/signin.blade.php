@extends('home.main')
@section('body')
<body class="login-page ">
@include('home.unit.nav')
<div class="page-header header-filter" style="background-image: url({{ config('main.home.auth_bg') }}); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                <div class="card card-signup">
                    {{-- 错误信息 --}}
                    @if (count($errors) > 0)
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="cursor: pointer">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <ol>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ol>
                    </div>
                    @endif
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(session()->has($msg))
                            <div class="alert alert-{{ $msg }} alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="cursor: pointer">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <ul>
                                    <li>{{ session()->get($msg) }}</li>
                                </ul>
                            </div>
                        @endif
                    @endforeach
                    <form class="form" method="post" action="{{ route('_login') }}">
                        {{ csrf_field() }}
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">用户登录</h4>
                            <div class="social-line">
                                <a href="#pablo" class="btn btn-just-icon btn-link">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="#pablo" class="btn btn-just-icon btn-link">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#pablo" class="btn btn-just-icon btn-link">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                        <p class="description text-center"><a href="{{ route('reg') }}">没有账号？去注册一个</a></p>
                        <div class="card-body">
                            <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">face</i>
                                    </span>
                                <input type="text" name="email" class="form-control" placeholder="请输入邮箱/用户名" value="{{ old('email') }}">
                            </div>
                            <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock_outline</i>
                                    </span>
                                <input type="password" name="password" class="form-control" placeholder="请输入密码">
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember">
                                    记住我
                                    <span class="form-check-sign">  <span class="check"></span> </span>
                                </label>
                            </div>
                            <div class="description" style="margin-left: 6%;margin-top: 18px;"><a href="javascript:void(0);">忘记密码</a></div>
                        </div>
                        <div class="footer text-center">
                            <input type="submit" class="btn btn-primary btn-link btn-wd btn-lg" value="Get Started" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection