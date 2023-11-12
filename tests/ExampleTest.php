<?php

describe('Methods Unit Test', function () {
    test('getModels() function', function () {
        $models = \ArdaGnsrn\ElevenLabs\Facades\ElevenLabs::getModels();
        expect($models)->toBeArray();
        expect($models)->not->toBeEmpty();
    });
    test('textToSpeech() function', function () {
        $response = \ArdaGnsrn\ElevenLabs\Facades\ElevenLabs::textToSpeech('2EiwWnXFnvU5JabPnv8n', 'H');
        expect($response)->toBeInstanceOf(\ArdaGnsrn\ElevenLabs\Responses\TextToSpeechResponse::class);

        $response->saveFile('test.mp3');
        expect(\Illuminate\Support\Facades\Storage::exists('test.mp3'))->toBeTrue();
    });
});
