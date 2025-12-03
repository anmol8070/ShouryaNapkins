# ---------------------------------------------------------
# Laravel Dockerfile for Render Deployment
# PHP 8.2 + Required Extensions
# ---------------------------------------------------------

FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpng-dev \
    libzip-dev \
    libonig-dev \
    zip \
    && docker-php-ext-install pdo pdo_mysql mbstring zip gd

# Install Composer from official image
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress

# Generate storage symlink (IMPORTANT STEP 2)
RUN php artisan storage:link || true

# Laravel permissions
RUN chmod -R 775 storage bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache

# Clear any cached config
RUN php artisan config:clear || true
RUN php artisan route:clear || true
RUN php artisan cache:clear || true

# Expose Render's required port
EXPOSE 8080

# Start Laravel server
CMD php artisan serve --host=0.0.0.0 --port=8080
