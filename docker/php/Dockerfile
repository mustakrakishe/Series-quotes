FROM php:7.4-fpm

COPY ./docker/php/entrypoint.sh /usr/local/bin/entrypoint.sh
COPY ./docker/php/crontabs/root /var/spool/cron/crontabs/root
COPY --from=composer:2.3.5 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

RUN apt-get update && apt-get -y install cron \
    && pecl install xdebug redis\
    && docker-php-ext-install mysqli pdo_mysql \
    && docker-php-ext-enable redis \
    && chmod +x /usr/local/bin/entrypoint.sh \
    && service cron start \
    && crontab /var/spool/cron/crontabs/root

EXPOSE 9000

ENTRYPOINT [ "entrypoint.sh" ]
CMD [ "php-fpm" ]