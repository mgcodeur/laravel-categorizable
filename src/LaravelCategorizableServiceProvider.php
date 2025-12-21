<?php

namespace Mgcodeur\LaravelCategorizable;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Mgcodeur\LaravelCategorizable\Commands\LaravelCategorizableCommand;

class LaravelCategorizableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-categorizable')
            ->hasConfigFile('model-category')
            ->hasViews()
            ->hasMigration('create_categories_table')
            ->hasCommand(LaravelCategorizableCommand::class);
    }
}
