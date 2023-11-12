<?php

namespace ArdaGnsrn\ElevenLabs\Traits;

use ArdaGnsrn\ElevenLabs\Responses\TextToSpeechResponse;
use ArdaGnsrn\ElevenLabs\Utils\API;

trait TextToSpeechTrait
{
    /**
     * Text to speech
     */
    public function textToSpeech(string $voiceId, string $text, string $modelId = 'eleven_multilingual_v2', array $voiceSettings = ['stability' => 0.95, 'similarity_boost' => 0.75, 'style' => 0.06, 'use_speaker_boost' => true]): TextToSpeechResponse
    {
        $response = API::request('POST', "text-to-speech/$voiceId", [
            'json' => [
                'text' => $text,
                'model_id' => $modelId,
                'voice_settings' => $voiceSettings,
            ],
            'headers' => [
                'Accept' => 'audio/mpeg',
            ],
            'stream' => true,
        ], false);

        return new TextToSpeechResponse($response);
    }
}
