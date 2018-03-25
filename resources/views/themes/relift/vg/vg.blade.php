@extends('theme::home.main')
@section('body')
    <script>
        document.getElementsByTagName('body')[0].setAttribute('class', 'blog-posts');
    </script>
    <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url({{ media(theme('vg_image')) }});">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h2 class="title">虚荣战绩查询</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-plain card-form-horizontal" style="margin-top: -20px">
                            <div class="card-body">
                                <form action="{{ url('player.html') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-xl-5 col-xl-5">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">face</i>
                                            </span>
                                                <div class="form-group label-floating has-default bmd-form-group">
                                                    <input type="text" name="name" class="form-control" placeholder="填写游戏昵称" value="{{ old('name') }}" id="player-name" onchange="document.getElementById('player-link').setAttribute('href', '{{ url('player') }}/' + document.getElementById('player-name').value);">
                                                    <span class="material-input"></span>
                                                </div>
                                            </div>
                                        </div>
                                        {{--<div class="col-md-4">
                                            <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">build</i>
                                            </span>
                                                <div class="form-group label-floating has-default bmd-form-group" style="margin-top: -15px">
                                                    <select class="selectpicker" data-style="select-with-transition" name="re" title="选择国家" data-size="6" value="{{ old('re') }}">
                                                        <option value="0" selected>中国</option>
                                                        <option value="1">北美</option>
                                                        <option value="2">欧洲</option>
                                                        <option value="3">南美</option>
                                                        <option value="4">东亚</option>
                                                        <option value="4">东南亚</option>
                                                    </select>
                                                    <span class="material-input"></span>
                                                </div>
                                            </div>
                                        </div>--}}
                                        <div class="col-md-3">
                                            <a class="btn btn-primary btn-round btn-block" id="player-link" style="color: #ffffff">战绩查询</a>
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
@endsection