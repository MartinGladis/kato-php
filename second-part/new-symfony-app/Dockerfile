FROM php:7.4-fpm

WORKDIR /app

COPY . .

RUN apt-get update \
    && apt-get install -y git unzip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.deb.sh' | bash \
    && apt-get install symfony-cli

RUN composer install

EXPOSE 8000

CMD symfony serve