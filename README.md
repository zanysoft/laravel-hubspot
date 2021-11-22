# HubSpot PHP API Client Wrapper for Laravel

[![Latest Stable Version](https://poser.pugx.org/zanysoft/laravel-hubspot/v/stable)](https://packagist.org/packages/zanysoft/laravel-hubspot) [![Total Downloads](https://poser.pugx.org/zanysoft/laravel-hubspot/downloads)](https://packagist.org/packages/zanysoft/laravel-hubspot)

This is a wrapper for the [hubspot/hubspot-php](https://github.com/HubSpot/hubspot-php) package and gives the user a Service Container binding and facade of the `SevenShores\Hubspot\Factory::create('api-key')` function.

## Installation
1. `composer require zanysoft/laravel-hubspot`
2. Get a HubSpot API Key from the Intergrations page of your HubSpot account.
3. `php artisan vendor:publish --provider="ZanySoft\LaravelHubSpot\HubSpotServiceProvider" --tag="config"` will create a `config/hubspot.php` file.
4. Add your HubSpot API key into the your `.env` file: `HUBSPOT_API_KEY=yourApiKey`

## Usage
You can use either the facade or inject the HubSpot class as a dependency:
### Facade
```php
// Echo all contacts first and last names
$response = HubSpot::contacts()->all();
    foreach ($response->contacts as $contact) {
        echo sprintf(
            "Contact name is %s %s." . PHP_EOL,
            $contact->properties->firstname->value,
            $contact->properties->lastname->value
        );
    }
```
### Dependency Injection
```php
Route::get('/', function (ZanySoft\LaravelHubSpot\HubSpot $hubspot) {
    $response = $hubspot->contacts()->all();
    foreach ($response->contacts as $contact) {
        echo sprintf(
            "Contact name is %s %s." . PHP_EOL,
            $contact->properties->firstname->value,
            $contact->properties->lastname->value
        );
    }
});
```

For more info on using the actual API see the main repo [hubspot/hubspot-php](https://github.com/HubSpot/hubspot-php)

## Issues
Please only report issues relating to the Laravel side of things here, main API issues should be reported [here](https://github.com/ryanwinchester/hubspot-php/issues)
