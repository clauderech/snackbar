FROM php:8.0.28-fpm
RUN apt-get update | docker-php-ext-install mysqli pdo pdo_mysql
COPY ./www /var/www/html/