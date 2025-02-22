<?php

namespace :uc:vendor\:uc:package\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @mixin \:uc:vendor\:uc:package\:uc:package
 */
class :uc:package extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return ':lc:package';
    }
}
