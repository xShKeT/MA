FROM php:7.4-fpm-alpine

WORKDIR /var/www/html/


RUN apk add --update alpine-sdk
RUN set -ex \
  && apk --no-cache add \
    postgresql-dev
RUN apk update
RUN apk add --update sudo
RUN apk add --update libsodium-dev
RUN apk add --update libsodium
RUN docker-php-ext-install pdo pdo_pgsql sodium
RUN apk add --update autoconf
RUN apk add --update gcc
RUN sudo pecl install -f libsodium
RUN docker-php-ext-install sockets \
    && apk add --no-cache --update rabbitmq-c-dev \
    && apk add --no-cache --update --virtual .phpize-deps $PHPIZE_DEPS \
    && pecl install -o -f amqp \
    && docker-php-ext-enable amqp \
    && apk del .phpize-deps
RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

COPY . .
RUN composer require vladimir-yuldashev/laravel-queue-rabbitmq
RUN composer update
RUN composer dump-autoload
RUN composer install