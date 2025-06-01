FROM php:8.2-apache

# Enable basic PHP extensions (PDO MySQL)
RUN docker-php-ext-install pdo pdo_mysql

# Copy your PHP page to the web root
COPY index.php /var/www/html/

EXPOSE 80
