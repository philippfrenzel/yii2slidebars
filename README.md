yii2slidebars
=======

This extension is a wrapper for the amazing jquery slidebars which can be found here:

http://plugins.adchsm.me/slidebars/

Pls. take a closer look at all the plugin options, which can be passed over by adding them to
the "clientOptions" parameter as shown below.

A demo of the extension can be found here:

http://yii2fullcalendar.beeye.org/index.php/site/slidebars

Installation
============

Add this to your composer.json require section

```json
  "philippfrenzel/yii2slidebars": "*",
```

Basic Steps

These are the basic steps in order to get Slidebars working on your site. There are also more in-depth descriptions and API usage further down the page.

 + Add to your meta viewport tag to your head.
 + Wrap your entire page design in an element with id #sb-site.
 + Create elements for your Slidebars, giving them a base class of .sb-slidebar.
 + Set the side of your Slidebars by adding modifier classes.
 + Add control classes to elements to use the Slidebars.
 + Include jQuery, slidebars.min.js and slidebars.min.css in your pages.
 + Call the $.slidebars() method.

And finaly the view should look like this:

```php

<?php
use yii\helpers\Url;
?>

<h1><?php echo Html::encode($this->title); ?></h1>

<?= philippfrenzel\yii2slidebars\yii2slidebars::widget([
    'id' => 'yii2slidebars'
]); ?>

```

Currently it cause issues with having multiple sly's on one page, but we know this issue and are working on it.