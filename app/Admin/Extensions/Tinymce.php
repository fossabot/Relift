<?php
/**
 * Created by PhpStorm.
 * User: genes
 * Date: 2018/3/6
 * Time: 11:54
 */

namespace App\Admin\Extensions;

use Encore\Admin\Form\Field;

class Tinymce extends Field
{
	protected $view = 'admin.form.tiny';

	/*protected static $css = [
		'/vendor/wangEditor-3.0.9/release/wangEditor.min.css',
	];*/

	protected static $js = [
		'/js/tinymce/tinymce.min.js',
	];

	public function render()
	{
		$name = $this->formatName($this->column);

		$this->script = "tinymce.init({
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

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': '" . csrf_token() . "'
                        }
                    });
                    $.ajax({
                        url: '" . url('up_img') ."',
                        type: 'post',
                        dataType: 'json',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function (data) {
                            console.log(data);
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
                            var id = 'blobid' + (new Date()).getTime();
                            var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                            var base64 = reader.result.split(',')[1];
                            var blobInfo = blobCache.create(id, file, base64);
                            blobCache.add(blobInfo);

                            // call the callback and populate the Title field with the file name
                            cb(blobInfo.blobUri(), { title: file.name });
                        };
                    };

                    input.click();
                }
            });";
		return parent::render();
	}

}