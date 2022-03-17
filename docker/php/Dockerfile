FROM php:7.4-fpm

RUN \
    apt-get update \
    apt-get install -y --fix-missing \
        apt-utils \
        bash-completion \
        g++ \
        gcc \
        git \
        gnupg \
        make \
        nano \
        unzip \
    ; \
    echo "deb http://packages.dotdeb.org jessie all" >> /etc/apt/sources.list; \
    echo "deb-src http://packages.dotdeb.org jessie all" >> /etc/apt/sources.list; \
    curl -sS --insecure https://www.dotdeb.org/dotdeb.gpg | apt-key add -; \
    apt-get update; \
    apt-get install -y \
        libonig-dev \
        libxml2-dev \
        libxslt-dev \
        libzip-dev \
        zlib1g-dev \
    ; \
    pecl install -o -f \
        xdebug \
    ; \
    docker-php-ext-configure \
        intl \
    ; \
    docker-php-ext-install \
        bcmath \
        dom \
        intl \
        json \
        mbstring \
        xml \
        zip \
    ; \
    docker-php-ext-enable \
        xdebug \
    ; \
    apt-get autoremove -y; \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/*; \
    truncate -s 0 /var/log/*log;

# Setting up PHP's timezone
ARG TZ
RUN echo "date.timezone = ${TZ}" > ${PHP_INI_DIR}/conf.d/timezone.ini

# Setting up xDebug
ARG APP_ENV=dev
RUN set -xe; \
    mkdir -p /xdebug; \
    chown -R www-data:www-data /xdebug; \
    chmod -R ugo+rw /xdebug; \
    echo "xdebug.mode=coverage" >> ${PHP_INI_DIR}/conf.d/docker-php-ext-xdebug.ini;

# Install composer
RUN \
    curl -slL https://getcomposer.org/composer-2.phar -o /usr/local/bin/composer; \
    chmod +x /usr/local/bin/composer;

# Create user
ARG UID
RUN \
    useradd -ms /bin/bash --uid ${UID} docker; \
    usermod -a -G www-data docker;
COPY ./php/.bashrc /home/docker/.bashrc
RUN \
    chown -R docker:docker /home/docker; \
    chown -R docker /var/www/html;
USER docker

# Setting up user
RUN \
    echo "set linenumbers" > /home/docker/.nanorc

WORKDIR /var/www/html
