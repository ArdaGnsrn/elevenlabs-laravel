<?php

namespace ArdaGnsrn\ElevenLabs\Traits;

use ArdaGnsrn\ElevenLabs\Utils\API;

trait ModelsTrait
{
    /**
     * Get all models
     */
    public function getModels(): array
    {
        return API::request('GET', 'models');
    }
}
