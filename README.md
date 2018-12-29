# mailer

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Travis](https://img.shields.io/travis/fgiardina/mailer.svg?style=flat-square)]()
[![Total Downloads](https://img.shields.io/packagist/dt/fgiardina/mailer.svg?style=flat-square)](https://packagist.org/packages/fgiardina/mailer)

## Install
`composer require fgiardina/mailer`

## Provider
config/app.php 'providers' =>
``` bash
Fgiardina\Mailer\MailerServiceProvider::class,
```

## Publish
`php artisan vendor:publish --provider="Fgiardina\Mailer\MailerServiceProvider"`

## Usage
``` bash
curl -X POST \
  http://YOUR-DOMAIN/mailer/sendemail \
  -H 'Content-Type: application/json' \
  -d '{
    "to_name": "John Doe",
    "to_email": "JohnDoe@gmail.com",
    "to_bcc_email": "JohnDoe2@gmail.com",
    "subject": "Email title",
    "header": "<strong>Header Info</strong>",
    "body": "<br/><br/>Content Info<br/><br/><br/>",
    "footer": "<strong>Footer Info</strong>",
    "template": "basic"
}'
```

## Testing
Run the tests with:

``` bash
vendor/bin/phpunit
```

## Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security
If you discover any security-related issues, please email fgiardina@outlook.com instead of using the issue tracker.

## License
The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.