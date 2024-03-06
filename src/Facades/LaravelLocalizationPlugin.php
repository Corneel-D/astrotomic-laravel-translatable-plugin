<?php

namespace CorneelD\FilamentLaravelLocalizationPlugin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CorneelD\FilamentLaravelLocalizationPlugin\LaravelLocalizationPlugin
 */
class LaravelLocalizationPlugin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CorneelD\FilamentLaravelLocalizationPlugin\LaravelLocalizationPlugin::class;
    }
}
