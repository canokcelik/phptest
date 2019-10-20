FROM php:apache

RUN apt-get update \
  && apt-get install --yes --no-install-recommends libpq-dev git \
  && docker-php-ext-install pdo_pgsql pdo_mysql

WORKDIR /var/www/html/

#RUN git clone 'https://github.com/canokcelik/phptest.git'

COPY . .

