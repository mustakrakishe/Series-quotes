#!/bin/sh

chmod -R 777 storage
php artisan migrate

service cron start

exec "$@"