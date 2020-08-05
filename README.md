# Google Fonts field for Backpack

[![Latest Version on Packagist](https://img.shields.io/packagist/v/enniosousa/google-fonts-field-for-backpack.svg?style=flat-square)](https://packagist.org/packages/enniosousa/google-fonts-field-for-backpack)
[![Build Status](https://img.shields.io/travis/enniosousa/google-fonts-field-for-backpack/master.svg?style=flat-square)](https://travis-ci.org/enniosousa/google-fonts-field-for-backpack)
[![Quality Score](https://img.shields.io/scrutinizer/g/enniosousa/google-fonts-field-for-backpack.svg?style=flat-square)](https://scrutinizer-ci.com/g/enniosousa/google-fonts-field-for-backpack)
[![Total Downloads](https://img.shields.io/packagist/dt/enniosousa/google-fonts-field-for-backpack.svg?style=flat-square)](https://packagist.org/packages/enniosousa/google-fonts-field-for-backpack)

This package provides a `Google Fonts` field type for the [Backpack for Laravel](https://backpackforlaravel.com/) administration panel. The Google Fonts field allows admins to choose one or more fonts. All you need it's include the slylesheet link to you website.

## Screenshot
![image](https://user-images.githubusercontent.com/8731370/49556440-886de180-f8e2-11e8-8f0b-f34fc5b6aad9.png)

## Installation

You can install the package via composer:

```bash
composer require enniosousa/google-fonts-field-for-backpack
```

Publish the view

```bash
php artisan vendor:publish --provider="Enniosousa\GoogleFontsFieldForBackpack\GoogleFontsFieldForBackpackServiceProvider"
```

## Usage

#### Dashboard

```php
CRUD::addField([
    'name' => 'subtitleFont',
    'label' => "Subtitle Font",
    'type' => 'google_fonts',
    //'options'=> ['Lora', 'Jura', 'Muli:300'], //optional
    //'allows_multiple'=> true, //optional, default is false
    //'default' => 'Lora', //optional, it cans be string or array
]);
```

#### Frontend

``` php
<link href="https://fonts.googleapis.com/css?family=<?= implode('|', array_map('urlencode', (array) $model->subtitleFont)) ?>" rel="stylesheet" type="text/css">
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email ennio@enniosousa.com.br instead of using the issue tracker.

## Credits

- [Ennio Sousa](https://github.com/enniosousa)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).