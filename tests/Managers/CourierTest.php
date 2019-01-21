<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\CourierFaker;
use Railken\Amethyst\Managers\CourierManager;
use Railken\Amethyst\Tests\BaseTest;
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
