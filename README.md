# laravel-teams-logging

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
],
```
or simply add name to specify different project name for each connector.
```php
'teams' => [
    'driver'    => 'custom',
    'via'       => \MargaTampu\LaravelTeamsLogging\LoggerChannel::class,
    'level'     => 'debug',
    'url'       => env('INCOMING_WEBHOOK_URL'),
    'name'      => 'Dummy Project'
],
```

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
Here are some results of notifications sent to microsoft teams channel.

- Debug Notifications
![Screenshot](https://raw.githubusercontent.com/margatampu/laravel-teams-logging/master/assets/ltl-1debug.png)

- Info Notifications
![Screenshot](https://raw.githubusercontent.com/margatampu/laravel-teams-logging/master/assets/ltl-2info.png)

- Notice Notifications
![Screenshot](https://raw.githubusercontent.com/margatampu/laravel-teams-logging/master/assets/ltl-3notice.png)

- Warning Notifications
![Screenshot](https://raw.githubusercontent.com/margatampu/laravel-teams-logging/master/assets/ltl-4warning.png)

- Error Notifications
![Screenshot](https://raw.githubusercontent.com/margatampu/laravel-teams-logging/master/assets/ltl-5error.png)

- Critical Notifications
![Screenshot](https://raw.githubusercontent.com/margatampu/laravel-teams-logging/master/assets/ltl-6critical.png)

- Alert Notifications
![Screenshot](https://raw.githubusercontent.com/margatampu/laravel-teams-logging/master/assets/ltl-7alert.png)

- Emergency Notifications
![Screenshot](https://raw.githubusercontent.com/margatampu/laravel-teams-logging/master/assets/ltl-8emergency.png)

## License

This laravel-teams-logging package is available under the MIT license. See the LICENSE file for more info.