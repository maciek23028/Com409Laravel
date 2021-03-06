FROM php:7.2-apache-stretch

LABEL maintainer="Kalegos"

#Install PHP Extensions
RUN docker-php-ext-install pdo_mysql opcache \
	&& pecl install xdebug-2.6.1 \
	&& docker-php-ext-enable xdebug \
	&& a2enmod rewrite negotiation

#Install composer
COPY docker/composer/composer-installer.sh /usr/local/bin/composer-installer
RUN apt-get -yqq update \
	&& apt-get -yqq install --no-install-recommends zip unzip git \
	&& chmod +x /usr/local/bin/composer-installer \
	&& composer-installer \
	&& mv composer.phar /usr/local/bin/composer \
	&& chmod +x /usr/local/bin/composer \
	&& rm /usr/local/bin/composer-installer \
	&& composer --version

COPY docker/php/php.ini /usr/local/etc/php/
COPY docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY docker/php/xdebug-dev.ini /usr/local/etc/php/conf.d/xdebug-dev.ini

# Cache Composer dependencies
WORKDIR /tmp
ADD composer.json composer.lock /tmp/

RUN mkdir -p database/seeds \
	mkdir -p database/factories \
	&& composer install \
	--no-interaction \
	--no-plugins \
	--no-scripts \
	--prefer-dist \
	&& rm -rf composer.json composer.lock \
	database/ vendor/

#Add the project
ADD . /srv/app

WORKDIR /srv/app

RUN chown -R www-data:www-data /srv/app

RUN  composer check-platform-reqs \
	&& composer install \
	--no-interaction \
	--no-plugins \
	--no-scripts \
	--prefer-dist
