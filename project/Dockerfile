# Use the official PHP image with FPM (FastCGI Process Manager) for Nginx
FROM php:8.1-fpm

# Install necessary extensions for MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli

# Copy the project files to the container
COPY ./src /var/www/html

# Set proper permissions for the web root
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html