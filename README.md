# Mailer

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Travis](https://img.shields.io/travis/fgiardina/mailer.svg?style=flat-square)]()
[![Total Downloads](https://img.shields.io/packagist/dt/fgiardina/mailer.svg?style=flat-square)](https://packagist.org/packages/fgiardina/mailer)

## Installation

```bash
composer require fgiardina/mailer
```

If you are using Laravel 5.5+, there is no need to manually register the service provider. However, if you are using an earlier version of Laravel, register the `MailerServiceProvider` in your `app` configuration file:

```php
'providers' => [
    // Other service providers...

    Fgiardina\Mailer\MailerServiceProvider::class,
],
```

## Publish
```bash
php artisan vendor:publish --provider="Fgiardina\Mailer\MailerServiceProvider"
```

## Configure email settings
.env file:

```bash
  MAIL_DRIVER=smtp
  MAIL_HOST=smtp.mailtrap.io
  MAIL_PORT=2525
  MAIL_USERNAME=xxxxxxxxxxxx
  MAIL_PASSWORD=xxxxxxxxxxxx
  MAIL_ENCRYPTION=null
  MAIL_FROM_ADDRESS=example@mail.com
  MAIL_FROM_NAME="example"

  MAILER_VIEWS_FOLDER=vendor.mailer #change custom path
  MAILER_SEND_ROUTE="/mailer/sendemail" #change custom route
  MAILER_TEST_ROUTE="/mailer/testemail" #change custom route
  MAILER_TEST_MAIL_FORM_ENABLE=true #false: disabled public access test from {MAILER_TEST_ROUTE}
```


## Usage

* Web form
```bash
http://YOUR-DOMAIN/mailer/testemail
```

* Terminal or Postman client
```bash
curl -X POST \
  http://YOUR-DOMAIN/mailer/sendemail \
  -H 'Content-Type: application/json' \
  -d '{
    "to_name": "John Doe",
    "to_email": "john@doe.com",
    "to_bcc_email": "john2@doe.com",
    "subject": "Email title",
    "header": "Header Info",
    "body": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt",
    "footer": "Footer Info",
    "template": "format"
}'
```
- URL default: `http://YOUR-DOMAIN/mailer/sendemail` 
- URL custom: `http://YOUR-DOMAIN/{MAILER_SEND_ROUTE}` replace by value in .env file

Required: `to_email`, `subject`, `body`, `template`

## Templates
HTML template without format
```json
  "template": "basic"
```

HTML formatted template
```json
  "template": "format"
```

### Custom templates:
`Path: MAILER_VIEWS_FOLDER`

```json
  "template": "mycustomtemplate"
```

`mycustomtemplate.blade.php`
```php
// ...HTML
<body>

    @isset($data->header)
        <header>{{ $data->header }}</header>  
    @endisset

    <div>{{ $data->body }}</div>

    @isset($data->footer)
        <footer>{{ $data->footer }}</footer>  
    @endisset

</body>  
// ...HTML
```

| Attention!|
| --------- |
| Never use {!! !!} in template. **This can cause security problems**|

## License
The MIT License (MIT). Please see [License File](/LICENSE.md) for more information.