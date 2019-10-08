<?php

namespace yii2bs4\notify;

use yii\web\AssetBundle;

/**
 * Class BootstrapNotifyAsset
 *
 * @package yii2bs4\notify
 */
class BootstrapNotifyAsset extends AssetBundle
{
    /**
     * @var string the directory that contains the source asset files for this asset bundle.
     */
    public $sourcePath = '@bower/remarkable-bootstrap-notify';

    /**
     * @var array list of JavaScript files that this bundle contains.
     */
    public $js = [
        'bootstrap-notify.min.js',
    ];

    /**
     * @var array list of bundle class names that this bundle depends on.
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
