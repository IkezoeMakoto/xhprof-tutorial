FROM php:7.4-fpm-alpine

WORKDIR /app
COPY src /app

RUN apk add --update --no-cache make git libzip-dev \
    && docker-php-ext-install zip pdo_mysql
