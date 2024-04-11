FROM php:8
COPY . /var/www/html
WORKDIR /var/www/html
EXPOSE 80
