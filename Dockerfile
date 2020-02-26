FROM php:7.2-fpm-alpine
RUN apk update && apk add libxml2-dev && pear install -a SOAP-0.13.0 && docker-php-ext-install soap
RUN docker-php-ext-install pdo pdo_mysql
