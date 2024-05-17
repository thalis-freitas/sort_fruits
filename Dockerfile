FROM php:8.0-apache

RUN apt-get update && apt-get upgrade -y && \
    apt-get install -y git zip unzip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER=1

RUN composer global require phpunit/phpunit ^9

ENV PATH="/root/.composer/vendor/bin:${PATH}"
