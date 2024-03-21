FROM php:8.2-fpm

RUN apt-get update -y && apt-get install -y --no-install-recommends \
    supervisor

RUN pecl install xdebug

RUN docker-php-ext-enable xdebug

COPY docker/php/docker-php-ext-xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

EXPOSE 9000

WORKDIR /var/www/

CMD service supervisor start && php-fpm
