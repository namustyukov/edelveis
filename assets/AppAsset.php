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
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i',
        '//fonts.googleapis.com/css?family=Raleway:300,400,700',
        '//fonts.googleapis.com/css?family=Pacifico',
        '//fonts.googleapis.com/css?family=PT+Serif',

        'template/fonts/font-awesome/css/font-awesome.css',
        'template/plugins/magnific-popup/magnific-popup.css',
        'template/plugins/rs-plugin-5/css/settings.css',
        'template/plugins/rs-plugin-5/css/layers.css',
        'template/plugins/rs-plugin-5/css/navigation.css',
        'template/css/animations.css',
        'template/plugins/slick/slick.css',
        'template/css/style.css',
        'template/css/typography-default.css',
        'template/css/skins/light_blue.css',
        'template/css/custom.css',
        'css/site.css',
    ];
    public $js = [
        'template/plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js',
        'template/plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js',
        'template/plugins/isotope/imagesloaded.pkgd.min.js',
        'template/plugins/isotope/isotope.pkgd.min.js',
        'template/plugins/magnific-popup/jquery.magnific-popup.min.js',
        'template/plugins/waypoints/jquery.waypoints.min.js',
        'template/plugins/waypoints/sticky.min.js',
        'template/plugins/countTo/jquery.countTo.js',
        'template/plugins/slick/slick.min.js',
        'template/js/template.js',
        'template/js/custom.js'
        //'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
