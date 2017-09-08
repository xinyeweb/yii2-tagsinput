Tags Input For Yii2
===================
Tags Input For Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist xinyeweb/yii2-tagsinput "*"
```

or add

```
"xinyeweb/yii2-tagsinput": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= $form->field($model, 'tags')->widget(\xinyeweb\tagsinput\TagsInput::className()) ?>
```
提交過去的數據格式為 tag1,tag2,tag3