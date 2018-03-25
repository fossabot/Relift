@php

@endphp
@extends('theme::home.main')
@section('body')
    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url({{ media(theme('category_background')) }});">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">用户列表</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="container">
            <div class="section">
                <div class="row">
                    @if(! empty($users))
                        @foreach($users as $key => $user)
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card card-profile" style="max-width: 360px">
                                    <div class="card-avatar">
                                        <a href="#pablo">
                                            <img class="img" src="{{ media($user->avatar) }}">
                                        </a>
                                    </div>

                                    <div class="card-body ">
                                        <h4 class="card-title">{{ $user->name }}</h4>
                                        <h6 class="card-category text-gray">{{ $user->description }}</h6>
                                    </div>
                                    <div class="card-footer justify-content-center">
                                        <a href="#pablo" class="btn btn-just-icon btn-twitter btn-round">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-facebook btn-round">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                        <a href="#pablo" class="btn btn-just-icon btn-google btn-round">
                                            <i class="fa fa-google"></i>
                                        </a>
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