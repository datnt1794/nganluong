<?php

namespace Ttsoft\NganLuong\Facades;

use Illuminate\Support\Facades\Facade;

class NganluongFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'nganluong';
    }
}
