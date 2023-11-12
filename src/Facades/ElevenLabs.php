<?php

namespace ArdaGnsrn\ElevenLabs\Facades;

use ArdaGnsrn\ElevenLabs\Responses\TextToSpeechResponse;
use Illuminate\Support\Facades\Facade;

/**
 * @method static array getModels()
 * @method static TextToSpeechResponse textToSpeech(string $voiceId, string $text, string $modelId = "eleven_multilingual_v2", array $voiceSettings = ["stability" => 0.95, "similarity_boost" => 0.75, "style" => 0.06, "use_speaker_boost" => true])
 *
 * @see \ArdaGnsrn\ElevenLabs\ElevenLabs
 */
class ElevenLabs extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ArdaGnsrn\ElevenLabs\ElevenLabs::class;
    }
}
