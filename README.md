# Laravel 4 wrapper for Symfony's MimeTypeGuesser

laravel-mime-guesser is a simple Laravel 4 service provider (wrapper) for [Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesser](http://api.symfony.com/2.0/Symfony/Component/HttpFoundation/File/MimeType/MimeTypeGuesser.html).

### Contents
 
- [Installation](#installation)
- [Usage](#usage)
- [License](#license)

## Installation

Add laravel-mime-gueser to your composer.json file:

```
"require": {
  "fortean/laravel-mime-guesser": "dev-master"
}
```

Use composer to install this package.

```
$ composer update
```

### Registering the Package

Register the service provider within the ```providers``` array found in ```app/config/app.php```:

```php
'providers' => array(
	// ...
	
	'Fortean\MimeType\MimeTypeServiceProvider'
)
```

Add an alias within the ```aliases``` array found in ```app/config/app.php```:


```php
'aliases' => array(
	// ...
	
	'MimeType' => 'Fortean\MimeType\Facade\MimeType',
)
```

## Usage

Just follow the steps below and you will be able to use a [service class object](https://github.com/Lusitanian/PHPoAuthLib/tree/master/src/OAuth/OAuth2/Service)
to obtain a user data extractor customized for the oAuth provider it services:

```php
echo MimeType::guess('path/to/some/file'); // prints out the results of the Symfony MIME type guesser
```

## License

This library is licensed under the [MIT license](LICENSE).