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
        'assets/navbar/navbar.css'
    ];

    public $js = [
		'assets/navbar/navbar.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
	    'loutrux\argon\CreativeTimOfficialAsset'
    ];


    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->css[] = 'assets/css/override.css';
        parent::init();
    }
}
