<?php

namespace CorneelD\FilamentLaravelLocalizationPlugin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CorneelD\FilamentLaravelLocalizationPlugin\FilamentLaravelLocalizationPlugin
 */
class FilamentLaravelLocalizationPlugin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CorneelD\FilamentLaravelLocalizationPlugin\FilamentLaravelLocalizationPlugin::class;
    }
}
