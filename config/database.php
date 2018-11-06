<?php

return [
    'default' => 'mongousr',

    'connections' => [
        'mongousr' => [
            'driver'   => 'mongodb',
            'dsn'     => 'mongodb://Arturoor2d2:Thisisexile20$@developcluster-shard-00-00-cl6t9.mongodb.net:27017,developcluster-shard-00-01-cl6t9.mongodb.net:27017,developcluster-shard-00-02-cl6t9.mongodb.net:27017/admin?replicaSet=DevelopCluster-shard-0&ssl=true',
            'database' => 'users',
        ],
        'mongodates' => [
            'driver'   => 'mongodb',
            'dsn'     => 'mongodb://Arturoor2d2:Thisisexile20$@developcluster-shard-00-00-cl6t9.mongodb.net:27017,developcluster-shard-00-01-cl6t9.mongodb.net:27017,developcluster-shard-00-02-cl6t9.mongodb.net:27017/admin?replicaSet=DevelopCluster-shard-0&ssl=true',
            'database' => 'events',
        ]
    ],

    'migrations' => 'migrations',
    'redis' => [
        'client' => 'predis',
        'default' => [
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', 6379),
            'database' => 0,
        ],

    ],

];
