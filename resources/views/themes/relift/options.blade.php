<style>
    .card {
        border: 0;
        margin-bottom: 30px;
        margin-top: 30px;
        border-radius: 6px;
        color: rgba(0, 0, 0, .87);
        background: #fff;
        width: 100%;
    }

    .card .card-body {
        padding: .9375rem 1.875rem
    }

    .card .card-body {
        padding-top: 0;
        border: 0;
        border-radius: 6px
    }
</style>
<div class="card">
    <div class="card-body">
        <input class="btn btn-primary" type="button" value="首页" id="btn-home">
        <input class="btn btn-success" type="button" value="登入注册" id="btn-auth">
        <input class="btn btn-danger" type="button" value="轮播图" id="btn-carousel">
        <input class="btn btn-warning" type="button" value="vainglory" id="btn-vg">
    </div>
</div>




<div class="card" id="card-home">
    <div class="card-body">
        {!! theme_field('text', 'home_title', '首页大标题', '', '{}', '填写标题') !!}
    </div>
    <hr />
    <div class="card-body">
        {!! theme_field('image', 'home_background', '首页背景') !!}
    </div>
    <hr />
    <div class="card-body">
        {!! theme_field('file', 'home_video', '首页视频') !!}
    </div>
    <hr />
    <div class="card-body">
        {!! theme_field('image', 'home_video_image', '首页视频默认图片') !!}
    </div>
</div>





<div class="card" id="card-auth" style="display: none">
    <div class="card-body">
        {!! theme_field('image', 'auth_background', '登录注册页背景') !!}
    </div>
</div>




<div class="card" id="card-carousel" style="display: none">
    <div class="card-body">
        {!! theme_field('number', 'carousel_num', '轮播图数量', '', '{}', '填写轮播图数量') !!}
    </div>
    <div class="card-body">
        @php
            use Illuminate\Support\Facades\DB;
            $carousel_num = DB::table('voyager_theme_options')->where(['key' => 'carousel_num'])->first()->value;
            for ($i = 1; $i <= $carousel_num; $i++){
        @endphp
        {!! theme_field('image', 'home_carousel' . $i, '首页轮播图' . $i) !!}
        {!! theme_field('text_area', 'home_carousel_text' . $i, '轮播图公告' . $i, '', '{}', '轮播图公告' . $i) !!}
        @php
            }
        @endphp
    </div>
</div>




<div class="card" id="card-vg">
    <div class="card-body">
        {!! theme_field('image', 'vg_image', '战绩查询页图片') !!}
    </div>
    <hr />
</div>





{!! html_js('/vendor/material-kit/js/jquery-3.2.1.min.js') !!}
<script>
    $('#btn-home').click(function () {
        $('#card-home').css('display', 'block');
        $('#card-auth').css('display', 'none');
        $('#card-carousel').css('display', 'none');
        $('#card-vg').css('display', 'none');
    });

    $('#btn-auth').click(function () {
        $('#card-home').css('display', 'none');
        $('#card-auth').css('display', 'block');
        $('#card-carousel').css('display', 'none');
        $('#card-vg').css('display', 'none');
    });

    $('#btn-carousel').click(function () {
        $('#card-home').css('display', 'none');
        $('#card-auth').css('display', 'none');
        $('#card-carousel').css('display', 'block');
        $('#card-vg').css('display', 'none');
    });

    $('#btn-vg').click(function () {
        $('#card-home').css('display', 'none');
        $('#card-auth').css('display', 'none');
        $('#card-carousel').css('display', 'none');
        $('#card-vg').css('display', 'block');
    });
</script>


