<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\CouriersController::class,
    'router'     => [
        'as'     => 'courier.',
        'prefix' => '/couriers',
    ],
];
