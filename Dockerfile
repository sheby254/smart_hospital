FROM php:8.2-apache


RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip


RUN docker-php-ext-install \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd


RUN a2enmod rewrite




COPY docker/apache.conf /etc/apache2/sites-available/000-default.conf


COPY --from=composer:latest /usr/bin/composer /usr/bin/composer


WORKDIR /var/www/html


COPY . .


RUN composer install --no-dev --optimize-autoloader


RUN php artisan storage:link || true


RUN chown -R www-data:www-data storage bootstrap/cache


EXPOSE 80


CMD php artisan migrate --force && apache2-foreground