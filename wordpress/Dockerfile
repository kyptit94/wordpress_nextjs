FROM php:8.0-apache

# Install necessary extensions for WordPress
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mysqli pdo pdo_mysql zip \
    && docker-php-ext-enable gd mysqli pdo pdo_mysql zip

# Enable mod_rewrite
RUN a2enmod rewrite

# Restart Apache to apply changes
RUN service apache2 restart