<?php

namespace CorneelD\AstrotomicLaravelTranslatablePlugin\Commands;

use Illuminate\Console\Command;

class AstrotomicLaravelTranslatablePluginCommand extends Command
{
    public $signature = 'astrotomic-laravel-translatable-plugin';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
