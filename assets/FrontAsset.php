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
class FrontAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    "assets2/css/bootstrap.min.css",
    "assets2/css/font-awesome.min.css",
    "assets2/css/owl.carousel.min.css",
    "assets2/css/animate.min.css",
    "assets2/css/jquery-ui.css",
    "assets2/css/slick.css",
    "assets2/css/chosen.min.css",
    "assets2/css/pe-icon-7-stroke.css",
    "assets2/css/magnific-popup.min.css",
    "assets2/css/lightbox.min.css",
    "assets2/js/fancybox/source/jquery.fancybox.css",
    "assets2/css/jquery.scrollbar.min.css",
    "assets2/css/mobile-menu.css",
    "assets2/css/style.css",
    ];
    public $js = [
    // "assets2/js/jquery-1.12.4.min.js",
    // "assets2/js/jquery.plugin-countdown.min.js",
    // "assets2/js/jquery-countdown.min.js",
    // "assets2/js/bootstrap.min.js",
    // "assets2/js/owl.carousel.min.js",
    // "assets2/js/magnific-popup.min.js",
    // "assets2/js/isotope.min.js",
    // "assets2/js/jquery.scrollbar.min.js",
    // "assets2/js/jquery-ui.min.js",
    "assets2/js/mobile-menu.js",
    "assets2/js/chosen.min.js",
    "assets2/js/slick.js",
    "assets2/js/jquery.elevateZoom.min.js",
    "assets2/js/jquery.actual.min.js",
    "assets2/js/fancybox/source/jquery.fancybox.js",
    "assets2/js/lightbox.min.js",
    "assets2/js/owl.thumbs.min.js",
    "assets2/js/jquery.scrollbar.min.js",
    'https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM',
    "assets2/js/frontend-plugin.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
