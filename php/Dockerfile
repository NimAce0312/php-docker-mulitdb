FROM php:8.1.1-apache

COPY ./apache/000-default.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html/

RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN a2enmod rewrite

EXPOSE 80 443

CMD ["apache2-foreground"]
