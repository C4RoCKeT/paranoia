<?php
return [
    'timeZone' => 'Europe/Amsterdam',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'twoFa' => ['class' => promocat\twofa\TwoFa::class],
    ],
];
