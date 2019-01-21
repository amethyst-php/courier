<?php

return [
    'table'      => 'amethyst_couriers',
    'comment'    => 'Courier',
    'model'      => Railken\Amethyst\Models\Courier::class,
    'schema'     => Railken\Amethyst\Schemas\CourierSchema::class,
    'repository' => Railken\Amethyst\Repositories\CourierRepository::class,
    'serializer' => Railken\Amethyst\Serializers\CourierSerializer::class,
    'validator'  => Railken\Amethyst\Validators\CourierValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\CourierAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\CourierFaker::class,
    'manager'    => Railken\Amethyst\Managers\CourierManager::class,
];
