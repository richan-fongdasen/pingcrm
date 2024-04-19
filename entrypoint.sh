#!/bin/sh

php artisan optimize
php artisan turso:sync

php artisan octane:start --server=swoole --host=0.0.0.0 --port=8080
