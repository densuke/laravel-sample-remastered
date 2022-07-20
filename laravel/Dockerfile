FROM php
RUN --mount=type=tmpfs,destination=/var/cache/apt \
    --mount=type=tmpfs,destination=/var/lib/apt \
    apt-get update; \
    apt-get install -y git unzip
COPY --from=composer/composer /usr/bin/composer /usr/local/bin/composer
RUN docker-php-ext-install pdo_mysql pdo
WORKDIR /var/www/html
COPY sample /var/www/html
RUN composer install
