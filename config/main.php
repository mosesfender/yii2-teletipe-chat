<?php

$params = array_merge(
    require(__DIR__ . '/../../../common/config/params.php'),
    require(__DIR__ . '/../../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php')
);

return [
    'id'                  => 'ttchat',
    'name'                => 'Test Teletype Chat',
    'homeUrl'             => '/',
    'defaultRoute'        => 'default',
    'basePath'            => dirname(__DIR__),
    'bootstrap'           => ['log'],
    'controllerNamespace' => 'ttchat\controllers',
    'components'          => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName'  => false,
            'normalizer'      => [
                'class'                  => '\yii\web\UrlNormalizer',
                'action'                 => \yii\web\UrlNormalizer::ACTION_REDIRECT_PERMANENT,
                'collapseSlashes'        => true,
                'normalizeTrailingSlash' => true,
            ],
            'rules'           => [
                '<controller:[\w \-]+>/<action:[\w \-]+>' => '<controller>/<action>',
            ],
        ],
        'request'              => [
            'baseUrl'             => '',
            'cookieValidationKey' => '_uRtdnT7R510_',
            'parsers'             => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ],
    ],
    'params'              => $params,
];