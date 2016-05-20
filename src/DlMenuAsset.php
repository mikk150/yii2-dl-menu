<?php

namespace mikk150\dlmenu;

use yii\web\AssetBundle;

/**
*
*/
class DlMenuAsset extends AssetBundle
{
    public $sourcePath = '@mikk150/dlmenu/assets';
    public $css = [
        'css/component.css'
    ];
    public $js = [
        'js/modernizr.custom.js',
        'js/jquery.dlmenu.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset'
    ];
}
