Yii2 Silverbyte SDK
===================
A set of Yii2 classes for SilverByte integration

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist mipotech/yii2-silverbyte-sdk "*"
```

or add

```
"mipotech/yii2-silverbyte-sdk": "*"
```

to the require section of your `composer.json` file.

Configuration
-----

Add the following to @app/config/params.php:
```php
return [
    ...
    'silverbyte' => [
        // optional - recipient for email alerts
        'alertEmailRecipients' => [
            '...',
        ],
        'baseUrl' => '...',
        'userName' => '...',
        'password' => '',
        'customerID' => XXX,
    ],
    ...
];
```

Add the following to @app/config/web.php:
```php
'log' => [
    ...
    'targets' => [
        ...
        [
            'class' => 'yii\log\FileTarget',
            'levels' => ['error', 'warning', 'info'],
            'maxFileSize' => YII_DEBUG ? 1024 : 1024 * 5,
            'maxLogFiles' => YII_DEBUG ? 2 : 10,
            'categories' => ['mipotech\silverbyte\SilverbyteSdk'],
            'logFile' => '@app/runtime/logs/silverbyte/api.log',
            'logVars' => []
        ],
        ...
    ],
    ...
],
```

Usage
-----

An example of how the SDK is to be used:

```php
use mipotech\silverbyte\SilverbyteSdk;

$sbSdk = new SilverbyteSdk;
$result = $sbSdk->getHotels();
print_r($result);
```

Documentation
-----

Full documentation of all available API features must be obtained directly from SilverByte.