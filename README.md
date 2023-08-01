yii2-ckeditor5-word
==============
CKEditor for Yii with static build (https://docs.ckeditor.com/ckeditor5/latest/builds/)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist mhayajneh/yii2-ckeditor5-word "*"
```

or add

```
"mhayajneh/yii2-ckeditor5-word": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
use sangroya\ckeditor5\CKEditor;


<?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
       
    ]) ?>```
    
Upload Url
-----

```php
use sangroya\ckeditor5\CKEditor;


<?= $form->field($model, 'text')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
       'uploadUrl' => 'site/upload', //this will be the url where you want to ckeditor send the post request with file data
    ]) ?>```
