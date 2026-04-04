FROM php:8.2-apache

# 日本語ロケール設定
RUN apt-get update && apt-get install -y \
    locales \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libwebp-dev \
    libzip-dev \
    libonig-dev \
    && sed -i 's/# ja_JP.UTF-8/ja_JP.UTF-8/' /etc/locale.gen \
    && locale-gen \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

ENV LANG=ja_JP.UTF-8
ENV LANGUAGE=ja_JP:ja
ENV LC_ALL=ja_JP.UTF-8

# PHP拡張モジュールのインストール
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install -j$(nproc) \
    gd \
    mysqli \
    pdo_mysql \
    zip \
    mbstring \
    opcache

# Apache mod_rewrite有効化
RUN a2enmod rewrite

# PHP設定（日本語対応）
RUN { \
    echo '[PHP]'; \
    echo 'mbstring.language = Japanese'; \
    echo 'mbstring.detect_order = UTF-8,SJIS,EUC-JP,JIS,ASCII'; \
    echo 'date.timezone = Asia/Tokyo'; \
    echo 'upload_max_filesize = 20M'; \
    echo 'post_max_size = 20M'; \
    echo 'memory_limit = 256M'; \
    } > /usr/local/etc/php/conf.d/xcl.ini

# ドキュメントルート設定
ENV APACHE_DOCUMENT_ROOT /var/www/html

WORKDIR /var/www
