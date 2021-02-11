FROM php:7.4-fpm-alpine

WORKDIR /app
COPY src /app

RUN apk add --update --no-cache make git wget libzip-dev autoconf gcc g++ \
    && docker-php-ext-install zip pdo_mysql

ENV XHPROF_VERSION=5.0.4
RUN wget https://github.com/tideways/php-xhprof-extension/archive/v$XHPROF_VERSION.tar.gz -O /tmp/xhprof.tar.gz \
    && cd /tmp \
    && tar -xzvf xhprof.tar.gz \
    && cd /tmp/php-xhprof-extension-$XHPROF_VERSION \
    && phpize \
    && ./configure \
    && make \
    && make install \
    && cd - \
    && rm /tmp/xhprof.tar.gz \
    && rm -rf /tmp/php-xhprof-extension-$XHPROF_VERSION \
    && docker-php-ext-enable tideways_xhprof \
    && echo 'tideways.auto_prepend_library=0' >> ${PHP_INI_DIR}/conf.d/docker-php-ext-tideways.ini
#    && echo 'extension=tideways_xhprof.so' > /usr/local/etc/php/conf.d/tideways.ini