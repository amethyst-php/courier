<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Courier                 newEntity()
 * @method \Amethyst\Schemas\CourierSchema          getSchema()
 * @method \Amethyst\Repositories\CourierRepository getRepository()
 * @method \Amethyst\Serializers\CourierSerializer  getSerializer()
 * @method \Amethyst\Validators\CourierValidator    getValidator()
 * @method \Amethyst\Authorizers\CourierAuthorizer  getAuthorizer()
 */
class CourierManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.courier.data.courier';
}
