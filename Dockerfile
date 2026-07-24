FROM php:8.2-fpm-alpine AS base

RUN apk add --no-cache \
    ca-certificates \
    nginx \
    curl \
    git \
    unzip \
    libpng-dev \
    libjpeg-turbo-dev \
    libwebp-dev \
    freetype-dev \
    oniguruma-dev \
    libzip-dev \
    icu-dev \
    bash \
    nodejs \
    npm \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install pdo_mysql gd zip bcmath intl opcache \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

COPY composer.json composer.lock ./
COPY package.json package-lock.json* ./

RUN composer install --no-interaction --prefer-dist --no-scripts \
    && npm install --no-audit --no-fund

COPY . .

RUN composer dump-autoload --optimize \
    && npm run build \
    && mkdir -p storage bootstrap/cache public/build \
    && chown -R www-data:www-data storage bootstrap/cache public

COPY nginx/default.conf /etc/nginx/http.d/default.conf

EXPOSE 80

CMD sh -c "php artisan key:generate --force --no-interaction || true; php artisan migrate --force || true; php artisan storage:link || true; php artisan optimize:clear || true; php artisan config:cache; php artisan route:cache; php artisan view:cache; php-fpm -D; nginx -g 'daemon off;'"
