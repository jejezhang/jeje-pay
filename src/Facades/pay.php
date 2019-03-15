<?php

namespace Jeje\Pay\Facades;

use Illuminate\Support\Facades\Facade;

class Family extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pay';
    }
}
