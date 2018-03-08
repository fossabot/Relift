<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8"/>
    {{--<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png"/>--}}
    <link rel="icon" type="image/png" href="../assets/img/favicon.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>{!! config('main.title') !!}</title>

    {{-- CSS Just for demo purpose, don't include it in your project     --}}
    {{ Html::style('css/demo.css') }}
    {{ Html::style('css/vertical-nav.css') }}
    {{--     Fonts and icons     --}}
    {{ Html::style('css/font-awesome.min.css') }}
    {{ Html::style('css/material-kit.min.css') }}
    {{ Html::style('css/00eeb4ecf11641c2adaf8195536f0b0e.css') }}
    <link href="http://vjs.zencdn.net/6.6.3/video-js.css" rel="stylesheet">
</head>

@yield('body')
{{--   Core JS Files   --}}
{{ Html::script('js/jquery-3.2.1.min.js') }}
{{ Html::script('js/popper.min.js') }}
{{ Html::script('js/bootstrap-material-design.min.js') }}
{{--  Plugin for Date Time Picker and Full Calendar Plugin--}}
{{ Html::script('js/moment.min.js') }}
{{--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select --}}
{{ Html::script('js/bootstrap-selectpicker.js') }}
{{--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  --}}
{{ Html::script('js/bootstrap-tagsinput.js') }}
{{--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput --}}
{{ Html::script('js/jasny-bootstrap.min.js') }}
{{--	Plugin for Small Gallery in Product Page --}}
{{ Html::script('js/jquery.flexisel.js') }}
{{--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker --}}
{{ Html::script('js/bootstrap-datetimepicker.js') }}
{{--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ --}}
{{ Html::script('js/nouislider.min.js') }}
{{-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library --}}
{{ Html::script('js/material-kit.min.js') }}
{{-- Fixed Sidebar Nav - js With initialisations For Demo Purpose, Don't Include it in your project --}}
{{ Html::script('js/material-kit-demo.js') }}
{{-- Plugins for presentation and navigation  --}}
{{ Html::script('js/modernizr.js') }}
{{ Html::script('js/vertical-nav.js') }}
{{--  Google Maps Plugin    --}}
{{ Html::script('js/9192ebcd228c482e9ce3ac852bf828f5.js') }}
{{-- Sharrre libray --}}
{{ Html::script('js/jquery.sharrre.js') }}
<script src="http://vjs.zencdn.net/6.6.3/video.js"></script>
</body>
</html>