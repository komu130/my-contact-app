FROM php:8.2-fpm

# システムツールとPHP拡張をインストール
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN composer install && php artisan config:clear

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]