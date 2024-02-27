<?php

namespace CorneelD\FilamentLaravelLocalizationPlugin;

use CorneelD\FilamentLaravelLocalizationPlugin\Commands\FilamentLaravelLocalizationPluginCommand;
use CorneelD\FilamentLaravelLocalizationPlugin\Testing\TestsFilamentLaravelLocalizationPlugin;
use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentIcon;
use Illuminate\Filesystem\Filesystem;
use Livewire\Features\SupportTesting\Testable;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentLaravelLocalizationPluginServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-laravel-localization-plugin';

    public static string $viewNamespace = 'filament-laravel-localization-plugin';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name(static::$name)
            ->hasCommands($this->getCommands())
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->publishMigrations()
                    ->askToRunMigrations()
                    ->askToStarRepoOnGitHub('corneel-d/filament-laravel-localization-plugin');
            });

        $configFileName = $package->shortName();

        if (file_exists($package->basePath("/../config/{$configFileName}.php"))) {
            $package->hasConfigFile();
        }

        if (file_exists($package->basePath('/../database/migrations'))) {
            $package->hasMigrations($this->getMigrations());
        }

        if (file_exists($package->basePath('/../resources/lang'))) {
            $package->hasTranslations();
        }

        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }
    }

    public function packageRegistered(): void
    {
    }

    public function packageBooted(): void
    {
        // Asset Registration
        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName()
        );

        FilamentAsset::registerScriptData(
            $this->getScriptData(),
            $this->getAssetPackageName()
        );

        // Icon Registration
        FilamentIcon::register($this->getIcons());

        // Handle Stubs
        if (app()->runningInConsole()) {
            foreach (app(Filesystem::class)->files(__DIR__ . '/../stubs/') as $file) {
                $this->publishes([
                    $file->getRealPath() => base_path("stubs/filament-laravel-localization-plugin/{$file->getFilename()}"),
                ], 'filament-laravel-localization-plugin-stubs');
            }
        }

        // Testing
        Testable::mixin(new TestsFilamentLaravelLocalizationPlugin());
    }

    protected function getAssetPackageName(): ?string
    {
        return 'corneel-d/filament-laravel-localization-plugin';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
            // AlpineComponent::make('filament-laravel-localization-plugin', __DIR__ . '/../resources/dist/components/filament-laravel-localization-plugin.js'),
            Css::make('filament-laravel-localization-plugin-styles', __DIR__ . '/../resources/dist/filament-laravel-localization-plugin.css'),
            Js::make('filament-laravel-localization-plugin-scripts', __DIR__ . '/../resources/dist/filament-laravel-localization-plugin.js'),
        ];
    }

    /**
     * @return array<class-string>
     */
    protected function getCommands(): array
    {
        return [
            FilamentLaravelLocalizationPluginCommand::class,
        ];
    }

    /**
     * @return array<string>
     */
    protected function getIcons(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getRoutes(): array
    {
        return [];
    }

    /**
     * @return array<string, mixed>
     */
    protected function getScriptData(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getMigrations(): array
    {
        return [
            'create_filament-laravel-localization-plugin_table',
        ];
    }
}
