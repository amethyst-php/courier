<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class CourierAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'courier.create',
        Tokens::PERMISSION_UPDATE => 'courier.update',
        Tokens::PERMISSION_SHOW   => 'courier.show',
        Tokens::PERMISSION_REMOVE => 'courier.remove',
    ];
}
