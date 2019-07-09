<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\CouriersController::class,
    'router'     => [
        'as'     => 'courier.',
        'prefix' => '/couriers',
    ],
];
