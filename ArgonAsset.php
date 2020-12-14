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

    public $depends = [
	    'loutrux\argon\CreativeTimOfficialAsset'
    ];
}
