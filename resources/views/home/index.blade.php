@extends('home.main')
@section('body')
<body class="blog-posts ">
@include('home.unit.nav')
<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url({{ config('main.home.background') }});">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h2 class="title">{{ config('main.des') }}</h2>
            </div>
        </div>
    </div>
</div>
<div class="main main-raised">
    <div class="container">
        <div class="section">
            <h3 class="title">公告</h3>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="card card-blog">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ asset('images/side2.png') }}" alt="First slide">
                                    <div class="card-body">
                                        <h6 class="card-category text-info">公告</h6>
                                        <p class="card-description">
                                            苟利国家生死以，岂因祸福避趋之。
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('images/side2.png') }}" alt="Second slide">
                                    <div class="card-body">
                                        <h6 class="card-category text-info">ABC</h6>
                                        <p class="card-description">
                                            苟利国家生死以，岂因祸福避趋之。
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ asset('images/side2.png') }}" alt="Third slide">
                                    <div class="card-body">
                                        <h6 class="card-category text-info">公告</h6>
                                        <p class="card-description">
                                            苟利国家生死以，岂因祸福避趋之。
                                        </p>
                                    </div>
                                </div>
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
                    <h4 class="title"><br /></h4>
                    <video
                            id="my-player"
                            class="video-js vjs-big-play-centered"
                            width="640"
                            controls
                            preload="auto"
                            poster="{{ asset('video/index.png') }}"
                            data-setup='{}'>
                        <source src="{{ asset('video/index.mp4') }}" type='video/mp4'>
                    </video>
                </div>
            </div>
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
                                                <img class="img img-raised" src="{{ post_img($post['image']) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <h6 class="card-category text-info">Enterprise</h6>
                                            <h3 class="card-title">
                                                <a href="#pablo">{{ $post['title'] }}</a>
                                            </h3>
                                            <p class="card-description">
                                                Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses. Yet its own business model disruption is only part of the story — and…
                                                <a href="#pablo"> 阅读更多 </a>
                                            </p>
                                            <p class="author">
                                                by
                                                <a href="#pablo">
                                                    <b>{{ $post['uid'] }}</b>
                                                </a>, {{ $post['created_at'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                {{ $page->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subscribe-line">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="title">Get Tips &amp; Tricks every Week!</h3>
                    <p class="description">
                        Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="card card-plain card-form-horizontal">
                        <div class="card-body">
                            <form method="" action="">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">mail</i>
                                                </span>
                                            <div class="form-group label-floating has-default bmd-form-group">
                                                <input type="text" class="form-control" placeholder="Your Email...">
                                                <span class="material-input"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="button" class="btn btn-primary btn-round btn-block">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer ">
    <div class="container">
        <nav class="pull-left">
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
        </nav>
        <div class="copyright pull-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
        </div>
    </div>
</footer>
@endsection