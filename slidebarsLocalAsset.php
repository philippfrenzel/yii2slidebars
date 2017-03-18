<?php
/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */

namespace yii2slidebars;

use yii\web\AssetBundle;

class slidebarsLocalAsset extends AssetBundle
{
    /**
     * [$sourcePath description]
     * @var string
     */
    public $sourcePath = '@yii2slidebars/assets';
    
    public $css = [
        'css/slidebars.css'
    ];

    public $js = [
        //'slidebars.min.js'
    ];

    public $depends = [
        //'yii\web\JqueryAsset',
    ];
}
