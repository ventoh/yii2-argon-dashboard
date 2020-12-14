<?php
namespace loutrux\argon;

use yii\base\Exception;
use yii\web\AssetBundle;

/**
 * Material AssetBundle
 * @since 0.1
 */
class CreativeTimOfficialAsset extends AssetBundle
{
    public $sourcePath = '@vendor/creativetimofficial/argon-dashboard-free';

    public $css = [
        'assets/js/plugins/nucleo/css/nucleo.css',
	    'assets/js/plugins/nucleo/css/nucleo-svg.css',
        'assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css',
	    'assets/js/plugins/jquery.scrollbar/jquery.scrollbar.css',
	    //'assets/js/plugins/bootstrap/dist/css/bootstrap.min.css',
	    'assets/js/plugins/bootstrap/dist/css/bootstrap-reboot.min.css',
	    'assets/js/plugins/bootstrap/dist/css/bootstrap-grid.min.css',
	    'assets/css/argon-dashboard.css',
	    'assets/css/argon-dashboard.css.map',

    ];

    public $js = [
    	//'assets/js/plugins/jquery/dist/jquery.min.js',
	    'assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js',
	    'assets/js/plugins/jquery.scrollbar/jquery.scrollbar.min.js',
	    'assets/js/plugins/jquery-scroll-lock/dist/jquery-scrollLock.min.js',
	];

    public $depends = [
	   // 'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
	    //'yii\bootstrap\BootstrapPluginAsset',

    ];
}
