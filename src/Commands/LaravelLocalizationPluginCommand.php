<?php

namespace CorneelD\FilamentLaravelLocalizationPlugin\Commands;

use Illuminate\Console\Command;

class LaravelLocalizationPluginCommand extends Command
{
    public $signature = 'filament-laravel-localization-plugin';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
