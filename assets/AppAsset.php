<?php
namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [    
        'https://fonts.googleapis.com/css?family=Roboto:400,100,300,600,400italic,700',
        "/css/animate.css",
        "/css/flexslider.css",
        "/css/icomoon.css",
        "/css/magnific-popup.css",
        "/css/style.css"
    ];
    public $js = [
        'js/modernizr-2.6.2.min.js',
        "js/jquery.easing.1.3.js",
        "js/jquery.placeholder.min.js",
        "js/jquery.waypoints.min.js",
        "js/jquery.flexslider-min.js",
        "js/jquery.magnific-popup.min.js",
        "js/magnific-popup-options.js",
        "js/main.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
