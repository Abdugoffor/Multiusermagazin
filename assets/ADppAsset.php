<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ADppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        "assets1/css/bootstrap.min.css",
    "https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i",
    "assets1/css/ready.css",
    "assets1/css/demo.css",
    
    ];
    public $js = [
       "assets1/js/core/jquery.3.2.1.min.js",
    "assets1/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js",
    "assets1/js/core/popper.min.js",
    "assets1/js/core/bootstrap.min.js",
    "assets1/js/plugin/chartist/chartist.min.js",
    "assets1/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js",
    "assets1/js/plugin/bootstrap-notify/bootstrap-notify.min.js",
    "assets1/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js",
    "assets1/js/plugin/jquery-mapael/jquery.mapael.min.js",
    "assets1/js/plugin/jquery-mapael/maps/world_countries.min.js",
    "assets1/js/plugin/chart-circle/circles.min.js",
    "assets1/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js",
    "assets1/js/ready.min.js",
    "assets1/js/demo.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
