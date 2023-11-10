<?php

namespace ArdaGnsrn\ElevenLabs\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ArdaGnsrn\ElevenLabs\ElevenLabs
 */
class ElevenLabs extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ArdaGnsrn\ElevenLabs\ElevenLabs::class;
    }
}
