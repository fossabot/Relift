@extends('theme::home.main')
@section('body')
    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url({{ media($post['image']) }});">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">{{ $post['title'] }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="container">
            <div class="section section-text">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h3 class="title">{{ $post['title'] }}</h3>
                        {!! $post['body'] !!}
                    </div>
                </div>
            </div>
            <div class="section section-blog-info">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="blog-tags">
                                    分类标签:
                                    <span class="badge badge-primary badge-pill">{{ $post['_category'] }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a href="#pablo" class="btn btn-google btn-round float-right">
                                    <i class="fa fa-google"></i> 232
                                </a>
                                <a href="#pablo" class="btn btn-twitter btn-round float-right">
                                    <i class="fa fa-twitter"></i> 910
                                </a>
                                <a href="#pablo" class="btn btn-facebook btn-round float-right">
                                    <i class="fa fa-facebook-square"></i> 872
                                </a>
                            </div>
                        </div>
                        <hr>
                        <div class="card card-profile card-plain">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="card-avatar">
                                        <a href="#pablo">
                                            <img class="img" src="{{ media($post['author_id']['avatar']) }}">
                                        </a>
                                        <div class="ripple-container"></div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h4 class="card-title">{{ $post['author_id']['name'] }}</h4>
                                    <p class="description">{{ $post['author_id']['description'] }}</p>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-info pull-right btn-round">已关注</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="section section-comments">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <div class="media-area">
                            <h3 class="title text-center">3 Comments</h3>
                            <div class="media">
                                <a class="float-left" href="#pablo">
                                    <div class="avatar">
                                        <img class="media-object" src="picture/card-profile4-square_1.jpg" alt="...">
                                    </div>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Tina Andrew
                                        <small>&#xB7; 7 minutes ago</small>
                                    </h4>
                                    <h6 class="text-muted"></h6>
                                    <p>Chance too good. God level bars. I&apos;m so proud of @LifeOfDesiigner #1 song in the country. Panda! Don&apos;t be scared of the truth because we need to restart the human foundation in truth I stand with the most humility. We are so blessed!</p>
                                    <div class="media-footer">
                                        <a href="#pablo" class="btn btn-primary btn-link float-right" rel="tooltip" title="Reply to Comment">
                                            <i class="material-icons">reply</i> Reply
                                        </a>
                                        <a href="#pablo" class="btn btn-danger btn-link float-right">
                                            <i class="material-icons">favorite</i> 243
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <a class="float-left" href="#pablo">
                                    <div class="avatar">
                                        <img class="media-object" alt="Tim Picture" src="picture/card-profile1-square_1.jpg">
                                    </div>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">John Camber
                                        <small>&#xB7; Yesterday</small>
                                    </h4>
                                    <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                                    <p> Don&apos;t forget, You&apos;re Awesome!</p>
                                    <div class="media-footer">
                                        <a href="#pablo" class="btn btn-primary btn-link float-right" rel="tooltip" title="Reply to Comment">
                                            <i class="material-icons">reply</i> Reply
                                        </a>
                                        <a href="#pablo" class="btn btn-link float-right">
                                            <i class="material-icons">favorite</i> 25
                                        </a>
                                    </div>
                                    <div class="media">
                                        <a class="float-left" href="#pablo">
                                            <div class="avatar">
                                                <img class="media-object" alt="64x64" src="picture/card-profile4-square_1.jpg">
                                            </div>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">Tina Andrew
                                                <small>&#xB7; 12 Hours Ago</small>
                                            </h4>
                                            <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                                            <p> Don&apos;t forget, You&apos;re Awesome!</p>
                                            <div class="media-footer">
                                                <a href="#pablo" class="btn btn-primary btn-link float-right" rel="tooltip" title="Reply to Comment">
                                                    <i class="material-icons">reply</i> Reply
                                                </a>
                                                <a href="#pablo" class="btn btn-link btn-secondary float-right">
                                                    <i class="material-icons">favorite</i> 2
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="title text-center">Post your comment</h3>
                        <div class="media media-post">
                            <a class="author float-left" href="#pablo">
                                <div class="avatar">
                                    <img class="media-object" alt="64x64" src="picture/card-profile6-square_1.jpg">
                                </div>
                            </a>
                            <div class="media-body">
                                <div class="form-group label-floating bmd-form-group">
                                    <label class="form-control-label bmd-label-floating" for="exampleBlogPost"> Write some nice stuff or nothing...</label>
                                    <textarea class="form-control" rows="5" id="exampleBlogPost"></textarea>
                                </div>
                                <div class="media-footer">
                                    <a href="#pablo" class="btn btn-primary btn-round btn-wd float-right">Post Comment</a>
                                </div>
                            </div>
                        </div>
                        <!-- end media-post -->
                    </div>
                </div>
            </div>--}}
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