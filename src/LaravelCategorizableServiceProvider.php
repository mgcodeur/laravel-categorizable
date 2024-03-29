<?php

namespace Mgcodeur\LaravelCategorizable;

use Mgcodeur\LaravelCategorizable\Commands\LaravelCategorizableCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasConfigFile()
            ->hasViews()
            ->hasRoute('api')
            ->hasMigration('create_categories_table')
            ->hasCommand(LaravelCategorizableCommand::class);
    }
}
