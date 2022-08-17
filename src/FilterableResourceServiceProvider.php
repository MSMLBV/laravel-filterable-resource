<?php

namespace MSML\FilterableResource;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use MSML\FilterableResource\Commands\FilterableResourceCommand;

class FilterableResourceServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-filterable-resource')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-filterable-resource_table')
            ->hasCommand(FilterableResourceCommand::class);
    }
}
