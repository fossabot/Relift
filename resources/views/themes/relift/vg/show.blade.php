@extends('theme::home.main')
@section('body')
    <script>
        document.getElementsByTagName('body')[0].setAttribute('class', 'blog-posts');
    </script>
    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url({{ media(theme('vg_image')) }});">
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
                    <div class="col-md-12">
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