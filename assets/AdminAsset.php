<?php
namespace app\assets;

use yii\web\AssetBundle;

class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'backend/assets/css/animate.min.css',
        'backend/assets/css/light-bootstrap-dashboard.css',
        'backend/assets/css/demo.css',
//        'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css',
//        'http://fonts.googleapis.com/css?family=Roboto:400,700,300',
        'backend/css/pe-icon-7-stroke.css',
    ];
    public $js = [
//        'backend/assets/js/jquery-1.10.2.js',
//	'backend/assets/js/bootstrap.min.js',
        'backend/assets/js/bootstrap-checkbox-radio-switch.js',
        'backend/assets/js/chartist.min.js',
        'backend/assets/js/bootstrap-notify.js',
//        'https://maps.googleapis.com/maps/api/js?sensor=false',
        'backend/assets/js/light-bootstrap-dashboard.js',
        'backend/assets/js/demo.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
