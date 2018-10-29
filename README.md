# laravel-teams-logging

[![Latest Version on Packagist](https://img.shields.io/packagist/v/margatampu/laravel-teams-logging.svg?style=flat-square)](https://packagist.org/packages/margatampu/laravel-teams-logging)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/margatampu/laravel-teams-logging.svg?style=flat-square)](https://packagist.org/packages/margatampu/laravel-teams-logging)

Laravel handler to sending messages to Microsoft Teams using the Incoming Webhook connector.

## Installation

Require this package with composer.

```bash
$ composer require margatampu/laravel-teams-logging
```

## Integration
Package tested and worked with Laravel and Lumen framework (5.7+). Create a [custom channel](https://laravel.com/docs/master/logging#creating-custom-channels) using laravel logging file or create new logging config file for lumen.

Add this configuration to `config/logging.php` file

```php
'teams' => [
    'driver'    => 'custom',
    'via'       => \MargaTampu\LaravelTeamsLogging\LoggerChannel::class,
    'level'     => 'debug',
    'url'       => env('INCOMING_WEBHOOK_URL'),
    'style'     => 'simple',    // Available style is 'simple' and 'card', default is 'simple'
],
```
or simply add name to specify different project name for each connector.
```php
'teams' => [
    'driver'    => 'custom',
    'via'       => \MargaTampu\LaravelTeamsLogging\LoggerChannel::class,
    'level'     => 'debug',
    'url'       => env('INCOMING_WEBHOOK_URL'),
    'style'     => 'simple',    // Available style is 'simple' and 'card', default is 'simple'
    'name'      => 'Dummy Project'
],
```

There are 2 available styles for microsoft teams message, using simple and card. You can see card style in results style which is difference from simple style.

After added configs to your `config/logging.php` file, add `INCOMING_WEBHOOK_URL` variable to your `.env` file with connector url from your microsoft teams connector. Please read [microsoft teams](https://docs.microsoft.com/en-us/microsoftteams/platform/concepts/connectors/connectors-using) document to find your connector url.

## Usage
To send a simple error message to teams channel, you kindly use script below:

```php
Log::channel('teams')->error('Error message');
```

Or you can include additional info to card message using log context.
```php
Log::channel('teams')->error('Error message', [
    [
        'name'  => 'Assigned to',
        'value' => 'Unassigned',
    ]
]);
```

When using simple style, log context will ignore from message.

You can also add `teams` to the default `stack` channel so all errors are automatically send to the `teams` channel.

```php
'channels' => [
    'stack' => [
        'driver' => 'stack',
        'channels' => ['single', 'teams'],
    ],
],
```

## Results
Here are some results of notifications sent to microsoft teams channel using card style.

- Debug log preview in microsoft teams channel
![Screenshot](https://raw.githubusercontent.com/margatampu/laravel-teams-logging/master/assets/ltl-1debug.png)

- Info log preview in microsoft teams channel
![Screenshot](https://raw.githubusercontent.com/margatampu/laravel-teams-logging/master/assets/ltl-2info.png)

- Notice log preview in microsoft teams channel
![Screenshot](https://raw.githubusercontent.com/margatampu/laravel-teams-logging/master/assets/ltl-3notice.png)

- Warning log preview in microsoft teams channel
![Screenshot](https://raw.githubusercontent.com/margatampu/laravel-teams-logging/master/assets/ltl-4warning.png)

- Error log preview in microsoft teams channel
![Screenshot](https://raw.githubusercontent.com/margatampu/laravel-teams-logging/master/assets/ltl-5error.png)

- Critical log preview in microsoft teams channel
![Screenshot](https://raw.githubusercontent.com/margatampu/laravel-teams-logging/master/assets/ltl-6critical.png)

- Alert log preview in microsoft teams channel
![Screenshot](https://raw.githubusercontent.com/margatampu/laravel-teams-logging/master/assets/ltl-7alert.png)

- Emergency log preview in microsoft teams channel
![Screenshot](https://raw.githubusercontent.com/margatampu/laravel-teams-logging/master/assets/ltl-8emergency.png)

## License

This laravel-teams-logging package is available under the MIT license. See the LICENSE file for more info.

