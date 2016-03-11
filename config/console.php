<?php

Yii::setAlias('@tests', dirname(__DIR__) . '/tests/codeception');

return [
    'id' => 'app-console',
    'bootstrap' => ['gii'],
    'controllerNamespace' => 'app\commands',
    'modules' => [
        'gii' => 'yii\gii\Module',
        'allowedIPs' => ['127.0.0.1', '::1', '10.0.12.57']
    ],
];
