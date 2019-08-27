<?php
namespace BishopJ88\Clarival\Facades;

use Illuminate\Support\Facades\Facade;

class ClarivalFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'BishopJ88\Clarival\Clarival';
    }
}