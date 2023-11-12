# ElevenLabs.io API for PHP Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ardagnsrn/elevenlabs-laravel.svg?style=flat-square)](https://packagist.org/packages/ardagnsrn/elevenlabs-laravel)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ardagnsrn/elevenlabs-laravel/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ardagnsrn/elevenlabs-laravel/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ardagnsrn/elevenlabs-laravel/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ardagnsrn/elevenlabs-laravel/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ardagnsrn/elevenlabs-laravel.svg?style=flat-square)](https://packagist.org/packages/ardagnsrn/elevenlabs-laravel)

This is an Open Source PHP Laravel package for [elevenlabs.io](https://elevenlabs.io) Text to Speech API. You can
find the Official API document here: [https://api.elevenlabs.io/docs](https://api.elevenlabs.io/docs)

## Buy me a coffee

Whether you use this project, have learned something from it, or just like it, please consider supporting it by buying
me a coffee, so I can dedicate more time on open-source projects like this :)

<a href="https://www.buymeacoffee.com/ardagnsrn" target="_blank"><img src="https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png" alt="Buy Me A Coffee" style="height: auto !important;width: auto !important;" ></a>

## Table of Contents

- [Buy me a coffee](#buy-me-a-coffee)
- [Table of Contents](#table-of-contents)
- [Installation](#installation)
- [Supported Methods](#supported-methods)
- [Parameters](#parameters)
  - [Voice Settings](#voice-settings)
- [Usage](#usage)
  - [textToSpeech() Method](#texttospeech-method)
  - [getModels() Method](#getmodels-method)
- [Testing](#testing)
- [Changelog](#changelog)
- [Contributing](#contributing)
- [Credits](#credits)
- [License](#license)

## Installation

You can install the package via composer:

```bash
composer require ardagnsrn/elevenlabs-laravel
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="elevenlabs-laravel-config"
```

This is the contents of the published config file:

```php
return [
    'api_key' => env('ELEVENLABS_API_KEY'),
];
```

## Supported Methods

| Method           | Parameters                                    | EndPoint                               | HTTP Method |
|------------------|-----------------------------------------------|----------------------------------------|-------------|
| `textToSpeech()` | `voiceId`, `text`, `modelId`, `voiceSettings` | `/v1/text-to-speech/{voice_id}/stream` | POST        |
| `getModels()`    | N/A                                           | `/v1/models`                           | GET         |

## Parameters

| Parameter     | Type   | Description                                                                             | Required | Default                                                                                           |
|---------------|--------|-----------------------------------------------------------------------------------------|----------|---------------------------------------------------------------------------------------------------|
| voiceId       | String | The ID of the voice to use. You can get a list of available voices using `getVoices()`. | Yes      | N/A                                                                                               |
| text          | String | The text to convert to speech.                                                          | Yes      | N/A                                                                                               |
| modelId       | String | The ID of the model to use. You can get a list of available models using `getModels()`. | No       | `eleven_multilingual_v2`                                                                          |
| voiceSettings | Array  | The settings to use for the voice.                                                      | No       | `['stability' => 0.95, 'similarity_boost' => 0.75, 'style' => 0.06, 'use_speaker_boost' => true]` |

### Voice Settings

| Parameter         | Type    | Description                          | Default |
|-------------------|---------|--------------------------------------|---------|
| stability         | Float   | The stability of the voice.          | 0.95    |
| similarity_boost  | Float   | The similarity boost of the voice.   | 0.75    |
| style             | Float   | The style of the voice.              | 0.06    |
| use_speaker_boost | Boolean | Whether to use speaker boost or not. | true    |

## Usage

### textToSpeech() Method
Generate a text to speech audio file. You can either save the file or get the pipe and do whatever you want with it.
```php
$elevenLabs = new ArdaGnsrn\ElevenLabs();
$response = $elevenLabs->textToSpeech('YOUR_VOICE_ID', 'Hello World!', 'eleven_multilingual_v2', [
    'stability' => 0.95, 
    'similarity_boost' => 0.75, 
    'style' => 0.06, 
    'use_speaker_boost' => true
]);

// If you want, you can save to storage like this:
$response->saveFile('audio.mp3');

// Or you can get the response and do whatever you want with it:
$response->getResponse();
```

### getModels() Method
Get a list of available models.
```php
$elevenLabs = new ArdaGnsrn\ElevenLabs();
$models = $elevenLabs->getModels();
```

## Testing

```bash
composer test
```

## Other Languages
Also, you can find the other languages of this package here:
- [ElevenLabs API For NodeJS (elevenlabs-js)](https://github.com/ArdaGnsrn/elevenlabs-js)

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits
- [Arda GUNSUREN](https://github.com/ArdaGnsrn)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
