FROM php:8.2-fpm

ARG WWW_DATA_USER
ARG ENVIRONMENT
ENV TZ=America/Sao_Paulo
ENV APT_KEY_DONT_WARN_ON_DANGEROUS_USAGE=DontWarn

RUN apt-get update -y && apt-get install -y --no-install-recommends \
    supervisor
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
COPY docker/php/docker-php-ext-xdebug.in.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

EXPOSE 9000

WORKDIR /var/www/

CMD service supervisor start && php-fpm
