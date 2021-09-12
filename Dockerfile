FROM php:7.4-apache

RUN docker-php-ext-install -j$(nproc) pdo_mysql

RUN a2enmod rewrite

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug
