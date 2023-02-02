FROM php:8.2.1-apache

RUN apt-get update
RUN apt-get install libonig-dev
RUN apt-get install -y libzip-dev

# 1. development packages
RUN apt-get install -y \
    git \
    zip \
    curl \
    sudo \
    unzip \
    libicu-dev \
    libbz2-dev \
    libpng-dev \
    libjpeg-dev \
    libmcrypt-dev \
    libreadline-dev \
    libfreetype6-dev \
    g++

# RUN curl -sL https://deb.nodesource.com/setup | bash
RUN apt-get install -yq nodejs npm
RUN npm install -g n
RUN n stable

# # add user with sudo privileges within Docker container
# # without adduser input questions
# # http://askubuntu.com/questions/94060/run-adduser-non-interactively/94067#94067
# RUN USER="testuser"
# RUN adduser --disabled-password --gecos "" $USER
# RUN sudo usermod -a -G sudo $USER
# RUN echo "$USER:abc123" | chpasswd
# RUN su - $USER # switch to testuser

# 2. apache configs + document root
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 3. mod_rewrite for URL rewrite and mod_headers for .htaccess extra headers like Access-Control-Allow-Origin-
RUN a2enmod rewrite headers

# 4. start with base php config, then add extensions
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

RUN docker-php-ext-install \
    bz2 \
    intl \
    iconv \
    bcmath \
    opcache \
    calendar \
    mbstring \
    pdo_mysql \
    zip

# 5. composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 6. we need a user with the same UID/GID with host user
# so when we execute CLI commands, all the host file's ownership remains intact
# otherwise command from inside container will create root-owned files and directories
ARG APACHE_RUN_USER=#1000
ARG APACHE_RUN_GROUP=#1000
RUN useradd -G www-data,root -u 1000 -d /home/devuser devuser
RUN mkdir -p /home/devuser/.composer && \
    chown -R devuser:devuser /home/devuser

# RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.37.2/install.sh | bash

 # This loads nvm
# RUN nvm use v14.18.0

 # This loads nvm bash_completion

WORKDIR /var/www/html
RUN chown -R www-data:www-data /var/www/html
COPY . /var/www/html/
RUN npm install
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer install
RUN composer require laravel/ui --dev
RUN php artisan key:generate
RUN php artisan ui vue --auth
