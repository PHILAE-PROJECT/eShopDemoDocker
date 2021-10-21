FROM php:cli-bullseye
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
CMD ["php"]
