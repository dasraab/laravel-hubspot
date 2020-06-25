<?php

namespace dasraab\HubspotLaravel\Facades;

use Illuminate\Support\Facades\Facade;
use HubSpot\Factory;

class Hubspot extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Factory::class;
    }
}
