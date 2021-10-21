FROM php:fpm
RUN apt-get update && apt-get install -y \
	libfreetype6-dev \
	libjpeg62-turbo-dev \
	libpng-dev \
        libzip-dev \
        zip \
        && pecl install xdebug-3.1.1 \
        && docker-php-ext-configure gd --with-freetype --with-jpeg \
	&& docker-php-ext-install -j$(nproc) gd \
        && docker-php-ext-install mysqli \
        && docker-php-ext-install zip \
        && docker-php-ext-enable xdebug
RUN sed -e 's/max_execution_time = 30/max_execution_time = 300/' -i /usr/local/etc/php/php.ini-development
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
CMD ["php-fpm"]
