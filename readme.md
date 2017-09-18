# Laravel Two Factor Authentication starter

This is a fresh laravel application with the default authentication modified to enforce two factor authentication.

The package [`pragmarx/google2fa-laravel`](https://github.com/antonioribeiro/google2fa-laravel) was used to generate and authenticate the secret keys, while [`bacon/bacon-qr-code`](https://github.com/Bacon/BaconQrCode) was used to generate the inline styles.

## Getting started

You can simply clone, change the environment variables and run migrations to begin.

## Usage

During registration, users will be forced to set up their Google Authenticator by scanning a barcode or typing the secret key.

Once logged in, if a user wants to change the secret, they can navigate to `myapp.test/re-authenticate`.

As the admin if you want to change the user's secret yourself, run this command from the console.

```
php artisan 2fa:reauthenticate
```

It will prompt for the user's email and then ask for confirmation before generating and displaying the new keys.

You can pass the email directly using the `--email` option, and skip the confirmation stop by adding the `--force` option.

```
php artisan 2fa:reauthenticate --email=user@example.com --force
```

## Self-Promotion

If you like this project, please star the repository on [GitHub](https://github.com/stephenafamo/laravel-2fa-starter). You might also consider visiting my [blog](https://stephenafamo.com/blog) and following me on [Twitter](https://twitter.com/stephenafamo) and [Github](https://github.com/stephenafamo).
