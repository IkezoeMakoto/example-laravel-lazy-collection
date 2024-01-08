FROM php:8.3-cli

RUN apt-get update && apt-get install -y git zip unzip \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
