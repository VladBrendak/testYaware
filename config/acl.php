<?php

return [
    'roles' => [
        'owner' => [
            'dashboard' => true,
            'reports' => true,
            'configuration' => true,
        ],
        'admin' => [
            'dashboard' => true,
            'reports' => false,
            'configuration' => true,
        ],
        'employee' => [
            'dashboard' => true,
            'reports' => true,
            'configuration' => false,
        ],
    ],
];