@php

@endphp
@extends('theme::home.main')
@section('body')
    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url({{ media(theme('category_background')) }});">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">{{ $category }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="container">
            <div class="section">
                <div class="row">
                    @if(! empty($posts))
                    @foreach($posts as $key => $post)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card card-blog">
                            <div class="card-header card-header-image">
                                <a href="{{ url('post/' . $post['slug'] . '.html') }}">
                                    <img class="img" src="{{ media($post['image']) }}">
                                    <div class="card-title">
                                        {{ $post['title'] }}
                                    </div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-info">{{ $post['category'] }}</h6>
                                <p class="card-description">
                                    @if(strlen(strip_tags($post['body'])) >= 150)
                                        {{ nb() }}{{ str_limit(strip_tags($post['body']), 150) }}
                                    @else
                                        {{ nb() }}{{ strip_tags($post['body']) }}
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center">这个标签里没有文章哦！</h2>
                            </div>
                        </div>
                    @endif
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