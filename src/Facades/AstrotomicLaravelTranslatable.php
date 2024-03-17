<?php

namespace CorneelD\AstrotomicLaravelTranslatablePlugin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CorneelD\AstrotomicLaravelTranslatablePlugin\LaravelTranslatablePlugin
 */
class AstrotomicLaravelTranslatable extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CorneelD\AstrotomicLaravelTranslatablePlugin\AstrotomicLaravelTranslatable::class;
    }
}
