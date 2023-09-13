FROM php:8.2-fpm

# Update and install necessary packages
RUN apt-get update && apt-get install -y \
    build-essential \
    libzip-dev \
    libicu-dev \
    libonig-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libgd-dev \
    jpegoptim optipng pngquant gifsicle \
    libmagickwand-dev --no-install-recommends \
    && rm -rf /var/lib/apt/lists/* \
    && curl -sLS https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g npm

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install pdo_mysql zip intl mbstring exif pcntl bcmath -j$(nproc) gd sockets
RUN pecl install imagick
RUN docker-php-ext-enable pdo_mysql zip intl mbstring exif pcntl bcmath gd sockets imagick

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ENV NODE_PATH=/var/www/node_modules

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

# Change current user to www
USER www

EXPOSE 9000
