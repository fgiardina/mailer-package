# Mailer

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Travis](https://img.shields.io/travis/fgiardina/mailer.svg?style=flat-square)]()
[![Total Downloads](https://img.shields.io/packagist/dt/fgiardina/mailer.svg?style=flat-square)](https://packagist.org/packages/fgiardina/mailer)

## Installation

`composer require fgiardina/mailer`

If you are using Laravel 5.5+, there is no need to manually register the service provider. However, if you are using an earlier version of Laravel, register the `MailerServiceProvider` in your `app` configuration file:

```php
'providers' => [
    // Other service providers...

    Fgiardina\Mailer\MailerServiceProvider::class,
],
```

## Publish
`php artisan vendor:publish --provider="Fgiardina\Mailer\MailerServiceProvider"`


## Configure email settings
.env file:

``` bash
  MAIL_DRIVER=smtp
  MAIL_HOST=smtp.mailtrap.io
  MAIL_PORT=2525
  MAIL_USERNAME=xxxxxxxxxxxx
  MAIL_PASSWORD=xxxxxxxxxxxx
  MAIL_ENCRYPTION=null
  MAIL_FROM_ADDRESS=example@mail.com
  MAIL_FROM_NAME="example"

  MAILER_VIEWS_FOLDER=vendor.mailer
  MAILER_SEND_ROUTE="/mailer/sendemail"
  MAILER_TEST_ROUTE="/mailer/testemail"
```


## Usage

* Web form
``` bash
http://YOUR-DOMAIN/mailer/testemail
```

* Terminal or Postman client
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
    "body": "Content Info 1<br/>Content Info 2<br/>Content Info 3",
    "footer": "<strong>Footer Info</strong>",
    "template": "format"
}'
```

## Templates
HTML template without format
``` json
  "template": "basic"
```
Or

HTML formatted template
``` json
  "template": "format"
```

## License
The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.