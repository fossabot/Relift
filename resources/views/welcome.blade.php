<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        {{ Html::script('js/tinymce/tinymce.min.js') }}
        {{ Html::script('js/jQuery-2.1.4.min.js') }}
        <script>
            tinymce.init({
                selector: '#content',
                theme: 'modern',
                width: 900,
                height: 400,
                language: 'zh_CN',
                plugins: [
                    'advlist autolink link image imagetools lists charmap print preview hr anchor pagebreak spellchecker',
                    'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                    'save table contextmenu directionality emoticons template paste textcolor'
                ],
                //content_css: 'css/content.css',
                toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
                toolbar2: 'link image code | print preview media fullpage | forecolor backcolor emoticons',
                fontsize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt',
                image_advtab: true,
                file_picker_types: 'file image media',
                images_upload_handler: function (blobInfo, success, failure) {
                    var formData = new FormData;
                    formData.append('file', blobInfo.blob(), blobInfo.filename());

                    $.ajax({
                        url: '{{ url('up_img') }}',
                        type: 'post',
                        dataType: 'json',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            /*var content = tinymce.activeEditor.getContent();
                            var twww = tinymce.activeEditor.getContent(content.replace(/^src="data:*" alt="$/, 'src="'+data+'" alt="'));*/
                            console.log(data);
                            console.log(blobInfo.base64())
                        }
                    });
                },
                file_picker_callback: function(cb, value, meta) {
                    var input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/* audio/* video/*');
                    input.onchange = function() {
                        var file = this.files[0];

                        var reader = new FileReader();
                        reader.readAsDataURL(file);
                        reader.onload = function () {
                            var id = 'images' + (new Date()).getTime();
                            var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                            var base64 = reader.result.split(',')[1];
                            var blobInfo = blobCache.create(id, file, base64);
                            blobCache.add(blobInfo);

                            // call the callback and populate the Title field with the file name
                            cb(blobInfo.blobUri(), { title: file.name });
                            console.log(value)
                        };
                    };

                    input.click();
                }
            });
        </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
                <textarea id="content">Hello, World!</textarea>
            </div>
        </div>
    </body>
</html>
