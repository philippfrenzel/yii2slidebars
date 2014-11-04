<?php
/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */

namespace philippfrenzel\yii2slidebars;

use yii\web\AssetBundle;

class slidebarsAsset extends AssetBundle
{
    public $sourcePath = '@philippfrenzel/yii2slidebars/assets';
    
    public $css = [
        'css/slidebars.css'
    ];

    public $js = array(
        'js/slidebars.js'
    );

    public $depends = array(
        'yii\web\JqueryAsset',
    );
}
