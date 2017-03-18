<?php

 /**
 * yii2 extension for the amazing jQuery Plugin: http://darsa.in/sly/
 * @version 0.9 (beta)
 * @copyright Frenzel GmbH - www.frenzel.net
 * @link http://www.frenzel.net
 * @author Philipp Frenzel <philipp@frenzel.net>
 */

namespace yii2slidebars;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;
use yii\web\JsExpression;

class yii2slidebars extends \yii\base\Widget
{
    
    /**
    * @var array the HTML attributes (name-value pairs) for the field container tag.
    * The values will be HTML-encoded using [[Html::encode()]].
    * If a value is null, the corresponding attribute will not be rendered.
    */
    public $options = [];

    /**
     * left sidebar used
     * @var boolean true by default
     */
    public $sbLeft = true;

    /**
     * left sidebar used
     * @var boolean true by default
     */
    public $sbRight = false;

    /**
     * $sbStatic Unfixes the Slidebar so it scrolls naturally with the site. Introduced in version 0.8
     * @var boolean
     */
    public $sbStatic = false;

    /**
     * $sbPush Slidebar is located off-canvas and pushes the site across when opened. Introduced in version 0.9
     * @var boolean
     */
    public $sbStylePush = true;

    /**
     * how much width should the sidebar use by opening
     * @var string
     */
    public $sbWidth = NULL;

    /**
     * initial options for the plugin, pls see docs for more details http://http://plugins.adchsm.me/slidebars/usage.php
     * @var [type]
     */
    public $initOptions = [];

    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        //checks for the element id
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }
        parent::init();
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        $this->registerPlugin();
    }

    /**
    * Registers a specific yii2slidebars widget and the related events
    * @param string $name the name of the yii2slidebars plugin
    */
    protected function registerPlugin()
    {
        $id = $this->options['id'];
        
        //get the displayed view and register the needed assets
        $view = $this->getView();
        slidebarsAsset::register($view);
        slidebarsLocalAsset::register($view);
        
        $js = [];
        $options = empty($this->initOptions) ? '' : JsExpression($this->initOptions);
        $js[] = "var controller$id = new slidebars();"; //var mySlidebars$id = new $.slidebars($options);
        $js[] = "controller$id.init($options);";
        
        $view->registerJs(implode("\n", $js),\yii\web\View::POS_READY);
    }

}
