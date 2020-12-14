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
    public $sourcePath = '@vendor/creativetimofficial/argon-design-system';

    public $css = [
        'assets/vendor/nucleo/css/nucleo-icons.css',
	    'assets/vendor/nucleo/css/nucleo-svg.css',
        'assets/vendor/font-awesome/css/font-awesome.css',
	    'assets/css/argon.css',
	];

    public $js = [
	    'assets/vendor/bootstrap/bootstrap.bundle.js',
	    'assets/js/argon.js',
	];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
    ];
}
