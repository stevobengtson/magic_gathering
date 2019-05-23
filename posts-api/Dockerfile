FROM php:7.3-apache

RUN apt-get update -y && apt-get install -y openssl zip unzip git && \
  curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
  docker-php-ext-install pdo mbstring pdo_mysql && \
  a2enmod rewrite

WORKDIR /app
COPY . /app
RUN composer install && \
  php artisan key:generate && \
  php artisan config:cache

CMD php artisan serve --host=0.0.0.0 --port=8181
