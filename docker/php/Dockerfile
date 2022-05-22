FROM php:8.0-fpm
MAINTAINER vladyslav <vladik>
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug
WORKDIR /var/www
