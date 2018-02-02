FROM php:7.0-apache

ADD ./ /var/www/

# Change Apache DocumentRoot
ENV APACHE_DOCUMENT_ROOT /var/www/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Enable path rewriting
RUN a2enmod rewrite
RUN service apache2 restart

WORKDIR /var/www/

# ENV COMPOSER_HOME /var/www
