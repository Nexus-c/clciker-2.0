FROM php:8.2-apache

# Install system packages and PHP MySQL extensions
RUN apt-get update \
    && apt-get install -y --no-install-recommends default-mysql-client zlib1g-dev libzip-dev libonig-dev \
    && docker-php-ext-install pdo_mysql mysqli \
    && rm -rf /var/lib/apt/lists/*

# Copy project files into webroot
COPY --chown=www-data:www-data .. /var/www/html/

# Enable rewrite and allow .htaccess if needed and fix permissions
RUN a2enmod rewrite \
    && sed -ri 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 80

# Use default apache2-foreground entrypoint from base image