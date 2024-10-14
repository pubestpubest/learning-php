FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql mysqli

WORKDIR /var/www/html

RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

COPY apache-config.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite

EXPOSE 80