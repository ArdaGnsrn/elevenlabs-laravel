<?php

namespace ArdaGnsrn\ElevenLabs\Utils;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Config;
use Psr\Http\Message\ResponseInterface;

class API
{
    private const BASE_URL = 'https://api.elevenlabs.io/';

    public static function request($method, $endpoint, $options = [], $isJson = true): ResponseInterface|array
    {
        try {
            $client = new Client([
                'base_uri' => self::BASE_URL,
                'headers' => [
                    'xi-api-key' => Config::get('elevenlabs.api_key'),
                    'Content-Type' => 'application/json',
                ],
            ]);
            $response = $client->request($method, 'v1/'.$endpoint, $options);
            if ($isJson) {
                return json_decode($response->getBody()->getContents(), true);
            }

            return $response;
        } catch (\GuzzleHttp\Exception\ClientException $exception) {
            if ($exception->getCode() === 401) {
                throw new \Exception('Invalid API key');
            }
            throw $exception;
        }
    }
}
