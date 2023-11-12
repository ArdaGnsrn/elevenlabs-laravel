<?php

namespace ArdaGnsrn\ElevenLabs\Responses;

use Illuminate\Support\Facades\Storage;
use Psr\Http\Message\ResponseInterface;

class TextToSpeechResponse
{
    private ResponseInterface $response;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }

    public function saveFile($file): void
    {
        Storage::put($file, $this->response->getBody()->getContents());
    }
}
