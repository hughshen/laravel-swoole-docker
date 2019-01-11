FROM alpine:3.7

# trust this project public key to trust the packages.
ADD https://php.codecasts.rocks/php-alpine.rsa.pub /etc/apk/keys/php-alpine.rsa.pub

RUN apk --update add ca-certificates \
    && echo "@php https://php.codecasts.rocks/v3.7/php-7.2" >> /etc/apk/repositories \
    && apk --update add \
        php7@php \
        php7-fpm@php \
        php7-mbstring@php \
        php7-pdo@php \
        php7-pdo_mysql@php \
        php7-mysqli@php \
        php7-curl@php \
        php7-openssl@php \
        php7-gettext@php \
        php7-bcmath@php \
        php7-zip@php \
        php7-json@php \
        php7-soap@php \
        php7-zlib@php \
        php7-xml@php \
        php7-xmlreader@php \
        php7-dom@php \
        php7-ftp@php \
        php7-ctype@php \
        php7-gd@php \
        php7-intl@php \
        php7-session@php \
        php7-iconv@php \
        php7-exif@php \
        php7-swoole@php \
        php7-opcache@php \
    && set -x \
    && addgroup -g 82 -S www-data \
    && adduser -u 82 -D -S -G www-data www-data \
    && ln -s /usr/bin/php7 /usr/bin/php \
    && rm -rf /var/cache/apk/*

EXPOSE 1215 8000

ENTRYPOINT ["/usr/bin/php"]
