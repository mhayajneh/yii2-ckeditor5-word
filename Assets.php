<?php
namespace mhayajneh\ckeditor5;
use yii\web\AssetBundle;

class Assets extends AssetBundle
{
    public $sourcePath = '@vendor/mhayajneh/yii2-ckeditor5-word/assets/';
    public $css = [
    ];

    public $js = [
        'ckeditor.js',
        'ckeditor-collection.js'
    ];

    public $depends = [
    ];
}