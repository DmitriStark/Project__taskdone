FROM php:8.0-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y git unzip zip

# Install PHP extensions required for Laravel
RUN docker-php-ext-install pdo pdo_mysql

# Set the working directory
WORKDIR /var/www

# Copy the composer.lock and composer.json
COPY composer.json composer.lock ./

# Install Composer dependencies
RUN composer install --no-dev --optimize-autoloader

# Copy the rest of the application
COPY . .

# Set permissions for the storage and bootstrap/cache directories
RUN chown -R www-data:www-data storage bootstrap/cache

# Expose port 9000 and start PHP-FPM server
EXPOSE 9000
CMD ["php-fpm"]
