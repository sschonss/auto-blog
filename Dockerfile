# Use the official PHP image as base
FROM php:8.2-apache

# Install required PHP extensions
RUN apt-get update && apt-get install -y \
    libxml2-dev \
    && docker-php-ext-install \
    pdo_mysql \
    mysqli \
    && docker-php-ext-enable \
    pdo_mysql \
    mysqli

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy the project files into the container
COPY . /var/www/html

# Expose port 80 to the outside world
EXPOSE 80

# Start Apache when the container launches
CMD ["apache2-foreground"]
