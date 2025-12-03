# PHP with extensions
FROM php:8.2-fpm

# Install system deps
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpng-dev \
    libonig-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip gd

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy files
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Storage link
RUN php artisan storage:link || true

# Permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Start Laravel server
CMD php artisan serve --host=0.0.0.0 --port=8080
