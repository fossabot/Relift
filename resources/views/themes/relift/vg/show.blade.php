@extends('theme::home.main')
@section('body')
    <style>
        .vg-red{
            border-left: 8px solid #fe6161;
        }
        .vg-blue{
            border-left: 8px solid #0aa9dc;
        }
    </style>
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
                        @foreach($m as $key => $value)
                        <div class="card vg-blue">
                            <div class="card-body"  data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                <div class="row">
                                    <div class="col-md-3">
                                        使用英雄：
                                    </div>
                                    <div class="col-md-5">0</div>
                                    <div class="col-md-2">
                                        蓝色方 : <br />
                                        @foreach($value[0]['player_data'] as $k => $v)
                                        {{ $v->name }}<br/>
                                        @endforeach
                                    </div>
                                    <div class="col-md-2">
                                        红色方 : <br />
                                        @foreach($value[1]['player_data'] as $k => $v)
                                            {{ $v->name }}<br/>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
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