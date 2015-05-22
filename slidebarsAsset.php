<?php
/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net> 
 */

namespace yii2slidebars;

use yii\web\AssetBundle;

class slidebarsAsset extends AssetBundle
{
    /**
     * [$sourcePath description]
     * @var string
     */
    public $sourcePath = '@bower/Slidebars/dist';
    
    public $css = [
        'slidebars.min.css'
    ];

    public $js = array(
        'slidebars.min.js'
    );

    public $depends = array(
        'yii\web\JqueryAsset',
    );
}
