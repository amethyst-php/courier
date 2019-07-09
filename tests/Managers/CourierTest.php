<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\CourierFaker;
use Amethyst\Managers\CourierManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class CourierTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = CourierManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = CourierFaker::class;
}
