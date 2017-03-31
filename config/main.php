<?php

define('DB_PATH_LOG', '/media/bb_control/log.db');

function f_getConfig() {
    return [
        'db' => [
            'use' => 'l'
        ],
        'session' => [
            'use' => '4',
        ],
        'check' => [
            'use' => [1],
        ]
    ];
}
