<?php

namespace ArdaGnsrn\ElevenLabs;

use ArdaGnsrn\ElevenLabs\Commands\ElevenLabsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ElevenLabsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('elevenlabs-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_elevenlabs-laravel_table')
            ->hasCommand(ElevenLabsCommand::class);
    }
}
