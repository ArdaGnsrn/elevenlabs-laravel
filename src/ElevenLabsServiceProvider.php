<?php

namespace ArdaGnsrn\ElevenLabs;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ElevenLabsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('elevenlabs-laravel')
            ->hasConfigFile('elevenlabs');
    }
}
