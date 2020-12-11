<?php
namespace loutrux\argon;

use yii\base\Exception;
use yii\web\AssetBundle;

/**
 * Material AssetBundle
 * @since 0.1
 */
class ArgonAsset extends AssetBundle
{
    public $sourcePath = '@vendor/loutrux/yii2-argon-dashboard';

    public $css = [
        'vendor/creativetimofficial/argon-design-system/assets/vendor/nucleo/css/nucleo.css',
        'vendor/creativetimofficial/argon-design-system/assets/vendor/font-awesome/css/font-awesome.css',
	    'vendor/creativetimofficial/argon-design-system/assets/vendor/font-awesome/css/font-awesome.css',
	    'vendor/creativetimofficial/argon-design-system/assets/css/argon.css',
	    'vendor/creativetimofficial/argon-design-system/assets/css/argon.css.map',
	    'assets/navbar/navbar.css'
    ];

    public $js = [
		'vendor/creativetimofficial/argon-design-system/assets/js/argon.js',
	    'vendor/creativetimofficial/argon-design-system/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js',
        'assets/navbar/navbar.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
    ];


    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->css[] = 'css/override.css';
        parent::init();
    }
}
