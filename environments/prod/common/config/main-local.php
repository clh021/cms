<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2cms_prod',
            'username' => 'admin',
            'password' => 'admin',
            'charset' => 'utf8',
        ],
    ],
    'controllerMap' => [
        'migrate' => [
            'class' => 'fishvision\migrate\controllers\MigrateController',
            'autoDiscover' => true,
            'migrationPaths' => [
                '@vendor'
            ],
        ],
    ],
];
