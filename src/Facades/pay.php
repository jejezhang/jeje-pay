<?php

namespace Jeje\Pay\Facades;

use Illuminate\Support\Facades\Facade;

class Pay extends Facade
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
