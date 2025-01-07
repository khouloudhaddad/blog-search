# Use a PHP image with Apache and Composer
FROM php:8.1-apache

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Set the working directory
WORKDIR /var/www/html

# Copy application code
COPY . .

# Install dependencies
RUN composer install

# Set Apache's DocumentRoot
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
