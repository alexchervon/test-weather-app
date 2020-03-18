FROM composer:latest AS composer
FROM php:7.3-fpm

RUN apt-get update \
    && apt-get -y install \
                git

COPY --from=composer /usr/bin/composer /usr/bin/composer