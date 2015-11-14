<?php namespace kofj\Lass\Facades;

use Illuminate\Support\Facades\Facade;

class Lass extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lass';
    }
}
