FROM php:7.2.8-fpm-alpine

RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli

