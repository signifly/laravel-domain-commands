# Laravel Domain Commands

The `signifly/laravel-domain-commands` package adds a handful of useful Artisan commands to your Laravel application. It assumes you are utilizing the Domain Driven Design approach.

It is heavily inspired by the DDD approach mentioned in [this great article](https://stitcher.io/blog/organise-by-domain) by Brent from Spatie.

In addition, it assumes that you have a separate namespace for your domain. Take a look of this example of the autoload section from a composer.json file:
```json
{
    "autoload": {
        "psr-4": {
            "App\\" : "app/App/",
            "Domain\\" : "app/Domain/",
            "Support\\" : "app/Support/"
        },
        "classmap": [
            "database"
        ],
        "files": [
            "app/helpers.php"
        ]
    }
}
```

## Basic Usage

The package comes with a handful of commands out of the box.

**Actions**

Generate a new Action using the `domain:action` command:

```bash
php artisan domain:action CreateUserAction -d User
```

*NOTE: You may use the -d|--domain option to specify the given domain for the action. If you do not specify a domain, it will be generated within the default namespace. You may configure that in the config file.*

**Data Transfer Objects**

Generate a new Data Transfer Object class using the `domain:dto` command:

```bash
php artisan domain:dto UserData -d User
```

**Enums**

Generate a new Enum class using the `domain:enum` command:

```bash
php artisan domain:enum UserType -d User
```

**Events**

Generate a new Event class using the `domain:event` command:

```bash
php artisan domain:event UserCreated -d User
```

**Models**

Generate a new Eloquent model class using the `domain:model` command:

```bash
php artisan domain:model User -d User
```

## Installation

You can install the package via composer:

```bash
composer require signifly/laravel-domain-commands
```

The package will automatically register itself.


You can optionally publish the config file with:

```bash
php artisan vendor:publish --tag="domain-commands-config"
```

## Testing
```bash
composer test
```

## Security

If you discover any security issues, please email dev@signifly.com instead of using the issue tracker.

## Credits

- [Morten Poul Jensen](https://github.com/pactode)
- [All contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
