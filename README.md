<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii2 Notify Widget</h1>
    <br>
</p>

Notify widget based on [Bootstrap Notify](http://bootstrap-notify.remabledesigns.com/)

[![Latest Stable Version](https://poser.pugx.org/yii2bs4/yii2-bootstrap4-notify/v/stable)](https://packagist.org/packages/yii2bs4/yii2-bootstrap4-notify)
[![Total Downloads](https://poser.pugx.org/yii2bs4/yii2-bootstrap4-notify/downloads)](https://packagist.org/packages/yii2bs4/yii2-bootstrap4-notify)
[![License](https://poser.pugx.org/yii2bs4/yii2-bootstrap4-notify/license)](https://packagist.org/packages/yii2bs4/yii2-bootstrap4-notify)

Installation 
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require yii2bs4/yii2-bootstrap4-notify "@dev"
```

or add

```
"yii2bs4/yii2-bootstrap4-notify": "@dev"
```

to the require section of your composer.json.

Usage
-------

Alert widget renders a message from session flash. All flash messages are displayed
in the sequence they were assigned using setFlash. You can set message as following:

1) Set the message in your action, for example:

```php
Yii::$app->session->setFlash('success', 'This is the message');
Yii::$app->session->setFlash('info', 'Your message');
Yii::$app->session->setFlash('warning', 'Your message');
Yii::$app->session->setFlash('error', 'Your message');
```

Also, you can set multiple messages as follows:
 
```php
Yii::$app->session->setFlash('error', ['Error 1', 'Error 2']);
```


2) Simply add widget to your layout as follows:
```php
<?php echo \yii2bs4\notify\BootstrapNotify::widget(); ?>
```

**You can render your own message without the session flash as following:**
```php
<?php echo \yii2bs4\notify\BootstrapNotify::widget([
    'useSessionFlash' => false,
    'options' => [
        'message' => 'Your message',
    ],
    'clientOptions' => [
        'type' => \yii2bs4\notify\BootstrapNotify::TYPE_SUCCESS,
        'showProgressbar' => true
    ]
]); ?>
```

Alert Options 
----------------
You can find them on the [options page](http://bootstrap-notify.remabledesigns.com/)
