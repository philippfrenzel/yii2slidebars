<?php

 /**
 * yii2 extension for the amazing jQuery Plugin: http://darsa.in/sly/
 * @version 0.9 (beta)
 * @copyright Frenzel GmbH - www.frenzel.net
 * @link http://www.frenzel.net
 * @author Philipp Frenzel <philipp@frenzel.net>
 */

namespace philippfrenzel\yii2slidebars;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;

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
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        parent::init();
        //checks for the element id
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }       
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
        $view = $this->getView();
        if($this->sbLeft)
        {
            echo Html::beginTag('div', ['class' => 'sb-slidebar sb-left']) . "\n";
                if (isset($view->blocks['sb-left']))
                {
                    echo $view->blocks['sb-left'];
                }
                else
                {
                    echo ' ';
                }
            echo Html::endTag('div') . "\n";
        }

        if($this->sbRight)
        {
            echo Html::beginTag('div', ['class' => 'sb-slidebar sb-right']) . "\n";
                if (isset($view->blocks['sb-right']))
                {
                    echo $view->blocks['sb-right'];
                }
                else
                {
                    echo ' ';
                }
            echo Html::endTag('div') . "\n";
        }

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
        
        $js = [];
        //$options = empty($this->clientOptions) ? '' : Json::encode($this->clientOptions);
        $js[] = "var mySlidebars$id = new $.slidebars();";
        
        $view->registerJs(implode("\n", $js),\yii\web\View::POS_READY);
    }

}
