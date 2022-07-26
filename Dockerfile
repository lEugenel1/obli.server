FROM webdevops/php-apache-dev:7.4-alpine

WORKDIR /app

COPY . .

RUN composer install && \
    php artisan key:generate && \
    php artisan storage:link

EXPOSE 80