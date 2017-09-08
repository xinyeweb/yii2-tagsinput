<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/18
 * Time: 23:39
 */

namespace xinyeweb\tagsinput;


use yii\web\AssetBundle;

class TagsInputAsset extends AssetBundle
{

    public $js = [
        'bootstrap-tagsinput.js'
    ];
    public $css = [
        'bootstrap-tagsinput.css'
    ];
    public $depends = ['yii\web\JqueryAsset'];

    public function init()
    {
        $this->sourcePath = dirname(__FILE__).DIRECTORY_SEPARATOR . 'assets';
    }
}