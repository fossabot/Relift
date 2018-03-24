@extends('theme::home.main')
@section('body')
<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url({{ media(theme('home_background')) }});">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h2 class="title">{{ theme('home_title') }}</h2>
            </div>
        </div>
    </div>
</div>
<div class="main main-raised">
    <div class="container">
        <div class="section">
            {{--@if(!isset($_GET['page']) || $_GET['page'] < 2)--}}
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <h3 class="title">公告</h3>
                    <div class="card card-blog">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @for ($i = 1; $i<= $num; $i++)
                                <div class="carousel-item @if($i == 1) active @endif ">
                                    <img class="d-block w-100" src="{{ media(theme('home_carousel' . $i)) }}" alt="First slide">
                                    <div class="card-body">
                                        <h6 class="card-category text-info">公告{{ $i }}</h6>
                                        <p class="card-description">
                                            {{ theme('home_carousel_text' . $i)}}
                                        </p>
                                    </div>
                                </div>
                                @endfor
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <ol class="carousel-indicators" style="top: 60%">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <h3 class="title">简介</h3>
                    <div id="accordion" role="tablist">
                        <div class="card card-collapse">
                            <div class="card-header" role="tab" id="headingOne">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                        ReMyLift工会简介
                                        <i class="material-icons">keyboard_arrow_down</i>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    &nbsp;&nbsp;&nbsp;&nbsp;从海希安峡谷到风暴女王竞技场，从3v3到5v5，我们前行着，rei全体人员谨以荣耀与生命献给虚荣，我们如同阐道者般，我们传教，我们苦行。我们一步一个脚印，为后来者开辟前路。我们的火焰将点亮虚荣水晶，我们的荣耀将高挂于风暴竞技场。我们在荆棘的路上前行，这是伟大的时代。我们在黑暗的纪元觉醒，这是与世的战争。有过迷茫，有过痛苦，有过孤独。但是虚荣水晶闪耀着高举战意，这是我们的战争，我们的世界，我们的海希安。
                                    <h4 style="text-align: center">我谨以生命与荣耀献给海希安</h4><h4 style="text-align: center">今夜如此，夜夜皆然。</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card card-collapse">
                            <div class="card-header" role="tab" id="headingTwo">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseTwo">
                                        虚荣简介
                                        <i class="material-icons">keyboard_arrow_down</i>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    &nbsp;&nbsp;&nbsp;&nbsp;《虚荣》（英语：Vainglory，港台译作“最终荣耀”）是一款由Super Evil Megacorp为iOS及安卓移动平台研发的多人在线竞技游戏（MOBA）。《虚荣》是电脑版MOBA游戏的简化版，游戏分为两个敌对阵营，每个阵营各有三名由玩家控制的游戏角色。玩家操控的游戏角色在一条游戏道路上互相攻击，以便最终击毁对方大本营。同时在这条游戏道路上，己方电脑和对方电脑各控制一半的境地，在境地内就有己方或地方的炮塔及士兵参与战斗；在交界区域还有补给点供双方争夺。该游戏的iOS版最早发布于2014年11月16日，一年之后，安卓版于2015年7月2日推出。
                                    <br/>&nbsp;&nbsp;&nbsp;&nbsp;《虚荣》的开发商Super Evil Megacorp由一群资深游戏开发者们组成，该游戏最早于2012年年初立项，目的是制作一个平板电脑游戏。《虚荣》最早于2014年9月在苹果的iPhone 6发布会上被公布，用于展示该手机的Metal图形API技术。Super Evil Megacorp试图让《虚荣》能够让玩家百玩不厌，同时能让互联网在线游戏变得跟局域网在线游戏一样方便。
                                </div>
                            </div>
                        </div>
                        <div class="card card-collapse">
                            <div class="card-header" role="tab" id="headingThree">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        宣传视频
                                        <i class="material-icons">keyboard_arrow_down</i>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <video
                                            id="my-player"
                                            class="video-js vjs-big-play-centered"
                                            width="480"
                                            controls
                                            preload="auto"
                                            poster="{{ media(theme('home_video_image')) }}"
                                            data-setup='{}'
                                            style="margin: 0 auto">
                                        <source src="{{ media(json_decode(theme('home_video'))[0]->download_link) }}" type='video/mp4'>
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--@endif--}}
            <div class="row">
                <div class="blogs-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 ml-auto mr-auto">
                                <h3 class="title">最新文章</h3>
                                <br>
                                @foreach($posts as $post)
                                <div class="card card-plain card-blog">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="card-header card-header-image">
                                                <img class="img img-raised" src="{{ media($post['image']) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <h6 class="card-category text-info">{{ $post['category'] }}</h6>
                                            <h3 class="card-title">
                                                <a href="{{ url('post/' . $post['slug'] . '.html') }}">{{ $post['title'] }}</a>
                                            </h3>
                                            <p class="card-description">
                                                @if(strlen(strip_tags($post['content'])) >= 250)
                                                    {{ nb() }}{{ str_limit(strip_tags($post['content']), 250) }}
                                                @else
                                                    {{ nb() }}{{ strip_tags($post['content']) }}
                                                @endif
                                            </p>

                                            <p>
                                                <span class="author">by
                                                    <a href="{{ url('user/' . $post['author'] . '.html') }}">
                                                        <b>{{ $post['author'] }}</b>
                                                    </a>
                                                </span>
                                                <span style="float: right"><a class="btn btn-rose" href="{{ url('post/' . $post['slug'] . '.html') }}"> Read More </a></span>
                                                <br />
                                                <span class="author">{{ $post['created'] }}</span>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            {{ $paginate->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer ">
    <div class="container">
        {{--<nav class="pull-left">
            <ul>
                <li>
                    <a href="https://www.creative-tim.com">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a href="http://presentation.creative-tim.com">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="http://blog.creative-tim.com">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="https://www.creative-tim.com/license">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>--}}
        <div class="copyright pull-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script> Designed By
            <a href="https://tyrantgenesis.cc" target="_blank"> TyrantGenesis </a>
        </div>
    </div>
</footer>
@endsection