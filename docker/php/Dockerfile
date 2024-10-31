FROM php:8.2-fpm

USER root

RUN apt-get update && apt-get install -y \
    build-essential \
    cron \
    ffmpeg \
    git \
    libfreetype6-dev \
    libglib2.0-dev \
    libjpeg-dev \
    libmcrypt-dev \
    libpng-dev \
    libpq-dev \
    librdkafka-dev \
    libzip-dev \
    nano \
    patchelf \
    mariadb-client \
    rclone \
    software-properties-common \
    unzip \
    zip

# composer install
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# special configuration for gd
RUN docker-php-ext-configure gd --with-freetype --with-jpeg && docker-php-ext-install gd

## install php extentions
RUN docker-php-ext-install pdo_pgsql  \
    && docker-php-ext-install pcntl \
    && docker-php-ext-install zip \
    && docker-php-ext-install exif

# set working directory
WORKDIR /var/www

# expose port 9000 and start php-fpm server
EXPOSE 9000
