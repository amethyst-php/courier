<?php

return [
    'table'      => 'amethyst_couriers',
    'comment'    => 'Courier',
    'model'      => Amethyst\Models\Courier::class,
    'schema'     => Amethyst\Schemas\CourierSchema::class,
    'repository' => Amethyst\Repositories\CourierRepository::class,
    'serializer' => Amethyst\Serializers\CourierSerializer::class,
    'validator'  => Amethyst\Validators\CourierValidator::class,
    'authorizer' => Amethyst\Authorizers\CourierAuthorizer::class,
    'faker'      => Amethyst\Fakers\CourierFaker::class,
    'manager'    => Amethyst\Managers\CourierManager::class,
];
