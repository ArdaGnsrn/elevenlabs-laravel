# This is an Open Source Laravel package for ElevenLabs Text to Speech API.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ardagnsrn/elevenlabs-laravel.svg?style=flat-square)](https://packagist.org/packages/ardagnsrn/elevenlabs-laravel)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ardagnsrn/elevenlabs-laravel/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ardagnsrn/elevenlabs-laravel/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ardagnsrn/elevenlabs-laravel/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ardagnsrn/elevenlabs-laravel/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ardagnsrn/elevenlabs-laravel.svg?style=flat-square)](https://packagist.org/packages/ardagnsrn/elevenlabs-laravel)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Buy me a coffee

Whether you use this project, have learned something from it, or just like it, please consider supporting it by buying
me a coffee, so I can dedicate more time on open-source projects like this :)

<a href="https://www.buymeacoffee.com/ardagnsrn" target="_blank"><img src="https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png" alt="Buy Me A Coffee" style="height: auto !important;width: auto !important;" ></a>

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

## Usage

```php
$elevenLabs = new ArdaGnsrn\ElevenLabs();
echo $elevenLabs->echoPhrase('Hello, ArdaGnsrn!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Arda GUNSUREN](https://github.com/ArdaGnsrn)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
