# Ping CRM with Turso Database

> This is a forked repository of the original [Ping CRM](https://github.com/inertiajs/pingcrm), a demo project showcasing Inertia.js with Laravel.

You can access this demo application online at [https://pingcrm.richan.id/](https://pingcrm.richan.id/).

This demo application illustrates how Laravel and Inertia.js work perfectly with the Turso database. The original Ping CRM uses an SQLite database, but this forked repository uses the Turso database.

This demo has adopted the [Turso Embedded Replica](https://turso.tech/blog/introducing-embedded-replicas-deploy-turso-anywhere-2085aa0dc242) feature, boosting the application's performance to be super fast! 🚀

The Turso database connection in this demo application is made possible by integrating the [Turso Database Driver for Laravel](https://github.com/richan-fongdasen/turso-laravel) package.

![](https://raw.githubusercontent.com/inertiajs/pingcrm/master/screenshot.png)

## Installation

Clone the repo locally:

```sh
git clone https://github.com/inertiajs/pingcrm.git pingcrm
cd pingcrm
```

Install PHP dependencies:

```sh
composer install
```

Install NPM dependencies:

```sh
npm ci
```

Build assets:

```sh
npm run dev
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Save your Turso database credentials in the `.env` file. You can either obtain the Turso database credentials by following the [instructions here](https://docs.turso.tech/sdk/http/quickstart) or use the Turso local development server as described in the [local development guide](https://docs.turso.tech/local-development#turso-cli). If you're using the local development server, set the `DB_URL` to `http://localhost:8080` and leave the `DB_ACCESS_TOKEN` empty.

```
DB_CONNECTION=turso
DB_URL=http://localhost:8080
DB_ACCESS_TOKEN=
DB_REPLICA=
DB_PREFIX=
DB_FOREIGN_KEYS=true
```

Run database migrations:

```sh
php artisan migrate
```

Run database seeder:

```sh
php artisan db:seed
```

Run the dev server (the output will give the address):

```sh
php artisan serve
```

You're ready to go! Visit Ping CRM in your browser, and login with:

- **Username:** johndoe@example.com
- **Password:** secret

## Running tests

To run the Ping CRM tests, run:

```
phpunit
```
