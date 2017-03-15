yii2slidebars
=======

This extension is a wrapper for the amazing jquery slidebars which can be found here:

http://plugins.adchsm.me/slidebars/

Pls. take a closer look at all the plugin options, which can be passed over by adding them to
the "clientOptions" parameter as shown below.

A demo of the extension can be found here:

http://yii2fullcalendar.beeye.org/index.php/site/slidebars

[![Latest Stable Version](https://poser.pugx.org/philippfrenzel/yii2slidebars/v/stable.svg)](https://packagist.org/packages/philippfrenzel/yii2slidebars)
[![Build Status](https://travis-ci.org/philippfrenzel/yii2slidebars.svg?branch=master)](https://travis-ci.org/philippfrenzel/yii2slidebars)
[![Code Climate](https://codeclimate.com/github/philippfrenzel/yii2slidebars.png)](https://codeclimate.com/github/philippfrenzel/yii2slidebars)
[![Version Eye](https://www.versioneye.com/php/philippfrenzel:yii2slidebars/badge.svg)](https://www.versioneye.com/php/philippfrenzel:yii2slidebars)
[![License](https://poser.pugx.org/philippfrenzel/yii2slidebars/license.svg)](https://packagist.org/packages/philippfrenzel/yii2slidebars)

Installation
============

Add this to your composer.json require section

```json
  "philippfrenzel/yii2slidebars": "*",
```

Basic Steps

These are the basic steps in order to get Slidebars working on your site. There are also more in-depth descriptions and API usage further down the page.

 + Add to your meta viewport tag to your head. 
 
 ´´´
 <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 ´´´
 
 + Wrap your entire page design in an element with id canvas='container'.
 
 ´´´
 <div canvas="container"></div>
 ´´´
 
 + Set the side of your Slidebars by adding modifier classes.
 + Add control classes to elements to use the Slidebars.

## Add Control Classes
There are optional classes which when applied to elements, can be used control the Slidebars. If you do not wish to use these, you can set your own elements to control the Slidebars using the API.

.sb-toggle-left can be used to toggle the left Slidebar. If clicked when the Slidebar is closed, it will open, if clicked when open, it will close.

.sb-toggle-right can be used to toggle the right Slidebar. If clicked when the Slidebar is closed, it will open, if clicked when open, it will close.

.sb-open-left can be used to open the left Slidebar when clicked.

.sb-open-right can be used to open the right Slidebar when clicked.

.sb-close can be used to close either Slidebar when clicked.

## View Code

And finaly the view should look like this:

```php

<?php
use yii\helpers\Html;
?>

<h1><?php echo Html::encode($this->title); ?></h1>

<?= \yii2slidebars\yii2slidebars::widget([
    'id' => 'yourid'
]); ?>

<?php yii\widgets\Block::begin(array('id'=>'sb-left')); ?>
    <h4><i class="fa fa-tag"></i> <?= Html::encode('Search') ?></h4>
    ...
<?php yii\widgets\Block::end(); ?>

<?php yii\widgets\Block::begin(array('id'=>'sb-right')); ?>
    <h4><i class="fa fa-tag"></i> <?= Html::encode('Toolbox') ?></h4>
    ...
<?php yii\widgets\Block::end(); ?>

```

Currently it cause issues with having multiple sly's on one page, but we know this issue and are working on it.
