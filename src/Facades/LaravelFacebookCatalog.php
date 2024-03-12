<?php

namespace MeeeetDev\LaravelFacebookCatalog\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MeeeetDev\LaravelFacebookCatalog\LaravelFacebookCatalog
 */
class LaravelFacebookCatalog extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \MeeeetDev\LaravelFacebookCatalog\LaravelFacebookCatalog::class;
    }
}
