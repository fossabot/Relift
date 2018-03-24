@extends('theme::home.main')
@section('body')
    <script>
        document.getElementsByTagName('body')[0].setAttribute('class', 'profile-page');
    </script>
    <div class="page-header header-filter" data-parallax="true" style="background-image: url({{ media($user['background']) }});"></div>
    <div class="main main-raised">
        <div class="profile-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile">
                            <div class="avatar">
                                <img src="{{ media($user['avatar']) }}" alt="Circle Image" class="img-raised rounded-circle img-fluid">
                            </div>
                            <div class="name">
                                <h3 class="title">{{ $user['name'] }}</h3>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                        @if(! Auth::check())
                        @else
                            @if(Auth::user()->name == $user['name'])
                            @elseif(Auth::user()->name != $user['name'])
                            <div class="follow">
                                <button class="btn btn-fab btn-primary btn-round" rel="tooltip" title="Follow this user">
                                    <i class="material-icons">add</i>
                                </button>
                            </div>
                            @endif
                        @endif
                    </div>
                </div>
                <div class="description text-center">
                    <p> {{ $user['description'] }} </p>
                </div>
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="profile-tabs">
                            <ul class="nav nav-pills nav-pills-icons nav-pills-info justify-content-center" role="tablist">
                                {{--
	                                color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
	                            --}}
                                <li class="nav-item">
                                    <a class="nav-link active" href="#work" role="tab" data-toggle="tab">
                                        <i class="material-icons">palette</i> 足迹
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#connections" role="tab" data-toggle="tab">
                                        <i class="material-icons">people</i> 关注
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#media" role="tab" data-toggle="tab">
                                        <i class="material-icons">camera</i> 收藏
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Profile Tabs -->
                    </div>
                </div>
                <div class="tab-content tab-space">
                    <div class="tab-pane active work" id="work">
                        <div class="row">
                            <div class="col-md-7 ml-auto">
                                <h4 class="title">Latest Collections</h4>
                                <div class="row collections">
                                    <div class="col-md-6">
                                        <div class="card card-background" style="background-image: url('images/mariya-georgieva.jpg')">
                                            <a href="#pablo"></a>
                                            <div class="card-body">
                                                <label class="badge badge-warning">Spring 2016</label>
                                                <a href="#pablo">
                                                    <h2 class="card-title">Stilleto</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-background" style="background-image: url('images/clem-onojeghuo.jpg')">
                                            <a href="#pablo"></a>
                                            <div class="card-body">
                                                <label class="badge badge-info">Spring 2016</label>
                                                <a href="#pablo">
                                                    <h2 class="card-title">High Heels</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-background" style="background-image: url('images/olu-eletu_1.jpg')">
                                            <a href="#pablo"></a>
                                            <div class="card-body">
                                                <label class="badge badge-danger">Summer 2016</label>
                                                <a href="#pablo">
                                                    <h2 class="card-title">Flats</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-background" style="background-image: url('images/darren-coleshill.jpg')">
                                            <a href="#pablo"></a>
                                            <div class="card-body">
                                                <label class="badge badge-success">Winter 2015</label>
                                                <a href="#pablo">
                                                    <h2 class="card-title">Men's Sneakers</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 mr-auto ml-auto stats">
                                <h4 class="title">Stats</h4>
                                <ul class="list-unstyled">
                                    <li>
                                        <b>60</b> Products</li>
                                    <li>
                                        <b>4</b> Collections</li>
                                    <li>
                                        <b>331</b> Influencers</li>
                                    <li>
                                        <b>1.2K</b> Likes</li>
                                </ul>
                                <hr>
                                <h4 class="title">About his Work</h4>
                                <p class="description">French luxury footwear and fashion. The footwear has incorporated shiny, red-lacquered soles that have become his signature.</p>
                                <hr>
                                <h4 class="title">Focus</h4>
                                <span class="badge badge-primary">Footwear</span>
                                <span class="badge badge-rose">Luxury</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane connections" id="connections">
                        <div class="row">
                            <div class="col-md-5 ml-auto mr-auto">
                                <div class="card card-profile card-plain">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="card-header card-header-image">
                                                <a href="#pablo">
                                                    <img class="img" src="picture/avatar.jpg" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h4 class="card-title">Gigi Hadid</h4>
                                                <h6 class="card-category text-muted">Model</h6>
                                                <p class="card-description">
                                                    Don't be scared of the truth because we need to restart the human foundation in truth...
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 mr-auto ml-auto">
                                <div class="card card-profile card-plain">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="card-header card-header-image">
                                                <a href="#pablo">
                                                    <img class="img" src="picture/marc_1.jpg" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h4 class="card-title">Marc Jacobs</h4>
                                                <h6 class="card-category text-muted">Designer</h6>
                                                <p class="card-description">
                                                    Don't be scared of the truth because we need to restart the human foundation in truth...
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 ml-auto mr-auto">
                                <div class="card card-profile card-plain">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="card-header card-header-image">
                                                <a href="#pablo">
                                                    <img class="img" src="picture/kendall_1.jpg" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h4 class="card-title">Kendall Jenner</h4>
                                                <h6 class="card-category text-muted">Model</h6>
                                                <p class="card-description">
                                                    I love you like Kanye loves Kanye. Don't be scared of the truth.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 ml-auto mr-auto">
                                <div class="card card-profile card-plain">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="card-header card-header-image">
                                                <a href="#pablo">
                                                    <img class="img" src="picture/card-profile2-square.jpg" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="card-body">
                                                <h4 class="card-title">George West</h4>
                                                <h6 class="card-category text-muted">Model/DJ</h6>
                                                <p class="card-description">
                                                    I love you like Kanye loves Kanye.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane text-center gallery" id="media">
                        <div class="row">
                            <div class="col-md-3 ml-auto">
                                <img src="picture/mariya-georgieva.jpg" class="rounded">
                                <img src="picture/clem-onojegaw_1.jpg" class="rounded">
                            </div>
                            <div class="col-md-3 mr-auto">
                                <img src="picture/clem-onojeghuo.jpg" class="rounded">
                                <img src="picture/olu-eletu_1.jpg" class="rounded">
                                <img src="picture/cynthia-del-rio.jpg" class="rounded">
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