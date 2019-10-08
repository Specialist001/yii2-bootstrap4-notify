<?php

namespace yii2bs4\notify;

use yii\web\AssetBundle;

/**
 * Class AnimateAsset
 *
 * @package yii2bs4\notify
 */
class AnimateAsset extends AssetBundle
{
    /**
     * @var string the directory that contains the source asset files for this asset bundle.
     */
    public $sourcePath = '@bower/animate.css';

    /**
     * @var array list of CSS files that this bundle contains.
     */
    public $css = [
        'animate.min.css',
    ];
}
