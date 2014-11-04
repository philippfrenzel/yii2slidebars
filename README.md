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

And finaly the view should look like this:

```php

<?php

use yii\helpers\Url;

?>

<h1><?php echo Html::encode($this->title); ?></h1>

<?= philippfrenzel\yii2sly\yii2slidebars::widget([
    'id' => 'yii2slidebar'
]); ?>

```

Currently it cause issues with having multiple sly's on one page, but we know this issue and are working on it.