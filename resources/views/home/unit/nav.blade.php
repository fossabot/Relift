<nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ route('home') }}">{!! config('main.site_name') !!}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="material-icons">home</i> 首页
                    </a>
                </li>
                @if(Auth::guest())
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="material-icons">apps</i> 用户中心
                    </a>
                    <div class="dropdown-menu dropdown-with-icons">
                        <a href="{{-- url('user/' . Auth::user()->name) --}}" class="dropdown-item">
                            <i class="material-icons">layers</i> 用户信息
                        </a>
                    </div>
                </li>
                @endif
                <li class="button-container nav-item">
                    @if(! Auth::check())
                    <a href="{{ route('login') }}" target="_blank" class="btn  btn-rose   btn-round btn-block">
                        <i class="material-icons">mood</i> 登录/注册
                    </a>
                    @else
                    <a href="{{ route('logout') }}" target="_blank" class="btn  btn-rose   btn-round btn-block">
                        <i class="material-icons">sentiment_very_dissatisfied</i> 退出
                    </a>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</nav>