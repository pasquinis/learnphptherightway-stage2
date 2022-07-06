FROM php:8.0.20-fpm

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip

COPY --from=composer/composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
