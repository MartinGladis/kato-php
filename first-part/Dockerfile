FROM php:7.4-cli
COPY . /app
WORKDIR /app

RUN apt-get update \
    && apt-get install -y git zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install

CMD php phpunit