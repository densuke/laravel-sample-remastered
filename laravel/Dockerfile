FROM php
RUN --mount=type=tmpfs,destination=/var/cache/apt \
    --mount=type=tmpfs,destination=/var/lib/apt \
    apt-get update; \
    apt-get install -y git unzip
COPY --from=composer/composer /usr/bin/composer /usr/local/bin/composer
WORKDIR /var/www/html
