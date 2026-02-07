<?php

namespace Fabianosfbr\HeaderSelect;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentIcon;
use Illuminate\Filesystem\Filesystem;
use Livewire\Livewire;
use Livewire\Features\SupportTesting\Testable;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Fabianosfbr\HeaderSelect\Commands\HeaderSelectCommand;
use Fabianosfbr\HeaderSelect\Components\HeaderSelectComponent;
use Fabianosfbr\HeaderSelect\Testing\TestsHeaderSelect;

class HeaderSelectServiceProvider extends PackageServiceProvider
{
    public static string $name = 'header-select';

    public static string $viewNamespace = 'header-select';

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
                    ->askToStarRepoOnGitHub('fabianosfbr/header-select');
            });

        $configFileName = $package->shortName();

        if (file_exists($package->basePath("/../config/{$configFileName}.php"))) {
            $package->hasConfigFile();
        }

       

        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }
    }

    public function packageRegistered(): void {}

    public function packageBooted(): void
    {
      
        // Handle Stubs
        if (app()->runningInConsole()) {
            foreach (app(Filesystem::class)->files(__DIR__ . '/../stubs/') as $file) {
                $this->publishes([
                    $file->getRealPath() => base_path("stubs/header-select/{$file->getFilename()}"),
                ], 'header-select-stubs');
            }
        }


        Livewire::component('header-select-component');
    }

    protected function getAssetPackageName(): ?string
    {
        return 'fabianosfbr/header-select';
    }

    

    /**
     * @return array<class-string>
     */
    protected function getCommands(): array
    {
        return [
            HeaderSelectCommand::class,
        ];
    }

    
}
