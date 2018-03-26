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
                        <div class="card @if($value['won'] == 'true') vg-blue @else vg-red @endif">
                            <div class="card-body"  data-toggle="collapse" href="#collapseExample{{ $key }}" aria-expanded="false" aria-controls="collapseExample">
                                <div class="row">
                                    <div class="col-xl-2 col-md-4">
                                        @if($value['won'] == 'true') <span class="badge badge-info">胜利</span> @else <span class="badge badge-danger">失败</span> @endif
                                        <img width="120px" class="rounded-circle" src="{{ vg(trim($value['part_data']->actor, '*')) }}">
                                    </div>
                                    <div class="col-xl-2 col-md-4">
                                        <span><i class="material-icons">access_time</i>{{ date('i:s', $value['match']->duration) }}</span><br />
                                        <span>{{ $value['match']->gameMode }}</span><br />
                                        <span>
                                            @php
                                            $time = $value['match']->createdAt;
                                            list($at, $b_t) = explode('T', $time);
                                            $bt = rtrim($b_t, '*');
                                            $time = time() - strtotime($at . ' ' . $bt);
                                            if ($time < 24 * 60 * 60)
                                            echo date('H', $time) . '小时前';
                                            else
                                            echo date('j', $time) . '天前';
                                            @endphp
                                        </span><br />
                                        <span>{{ $value['part_data']->stats->kills }}/{{ $value['part_data']->stats->deaths }}/{{ $value['part_data']->stats->assists }}</span><br />
                                        <span>KDA:{{ $value['part_data']->stats->deaths ? round(($value['part_data']->stats->kills + $value['part_data']->stats->assists) / $value['part_data']->stats->deaths, 2) : $value['part_data']->stats->kills + $value['part_data']->stats->assists }}</span><br />
                                    </div>
                                    <div class="col-xl-2 col-md-4"></div>
                                    <div class="col-xl-3 col-md-6 text-right">
                                        蓝色方 : <br />
                                        @foreach($value[0]['player_data'] as $k => $v)
                                        <a href="{{ url('player/' . $v->name) }}">{{ $v->name . nb() }}</a><img width="30px" class="rounded-circle" src="{{ vg(trim($value[0]['part_data'][$k]->actor, '*')) }}"><br/>
                                        @endforeach
                                    </div>
                                    <div class="col-xl-3 col-md-6 text-left">
                                        红色方 : <br />
                                        @foreach($value[1]['player_data'] as $k => $v)
                                            <img width="30px" class="rounded-circle" src="{{ vg(trim($value[1]['part_data'][$k]->actor, '*')) }}"><a href="{{ url('player/' . $v->name) }}">{{ nb() . $v->name }}</a><br/>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="collapseExample{{ $key }}">
                                <div class="card-body">
                                    <hr />
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="text-left">@if($value[0]['roster']->won == 'true') <span class="badge badge-info">胜利</span> @else <span class="badge badge-danger">失败</span> @endif 蓝色方</th>
                                            <th class="text-left">出装</th>
                                            <th class="text-right">出装</th>
                                            <th class="text-right">红色方 @if($value[1]['roster']->won == 'true') <span class="badge badge-info">胜利</span> @else <span class="badge badge-danger">失败</span> @endif</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($value[0]['part_data'] as $k => $v)
                                        <tr>
                                            <td class="text-left"><img width="30px" class="rounded-circle" src="{{ vg(trim($v->actor, '*')) }}"> <a href="{{ url('player/' . $value[0]['player_data'][$k]->name) }}">{{ $value[0]['player_data'][$k]->name }}</a></td>
                                            <td class="text-left">null</td>
                                            <td class="text-right">null</td>
                                            <td class="text-right"><a href="{{ url('player/' . $value[1]['player_data'][$k]->name) }}">{{ $value[1]['player_data'][$k]->name }}</a> <img width="30px" class="rounded-circle" src="{{ vg(trim($value[1]['part_data'][$k]->actor, '*')) }}"></td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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
    <script>
        var a = document.getElementsByTagName('a');
        for (var i = 0;i < a.length;i++){
            a[i].onclick = function () {
                window.location.href = this.getAttribute('href');
            }
        }
    </script>
@endsection