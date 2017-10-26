FROM php:7.0-apache

RUN docker-php-ext-install pdo pdo_mysql

COPY config/php.ini /usr/local/etc/php/
COPY config/ports.conf /etc/apache2/
COPY config/000-default.conf /etc/apache2/sites-enabled/

COPY app/ /var/www/html/