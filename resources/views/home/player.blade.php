@extends('home.main')
@section('body')
    <body class="blog-posts">
    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url({{ config('main.home.background') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">虚荣战绩查询（翻译中）</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">{{ $player_data['name'] }}</h4>
                                <h6 class="card-subtitle mb-2 text-muted">段位：？？</h6>
                                <p class="card-text">工会名称：{{ $player_data['stats']['guildTag'] }}</p>
                                <p class="card-text">等级：{{ $player_data['stats']['level'] }}</p>
                                <p class="card-text">胜场：{{ $player_data['stats']['wins'] }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">

                        <div class="card" style="border-left: 6px solid deepskyblue">
                            <div class="card-body">
                                <p class="card-text">类型：{{ $matches_data['gameMode'] }}</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer ">
        <div class="container">
            <div class="copyright pull-right">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script> Designed By
                <a href="http://tyrantgenesis.cc" target="_blank"> TyrantGenesis </a>
            </div>
        </div>
    </footer>
@endsection