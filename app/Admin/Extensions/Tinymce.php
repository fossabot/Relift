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

		$this->script = <<<EOT
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
                content_css: 'css/content.css',
                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image code | print preview media fullpage | forecolor backcolor emoticons',
                imagetools_cors_hosts: ['relift.tg'],
                imagetools_proxy: 'proxy.php'
            });
EOT;
		return parent::render();
	}
}