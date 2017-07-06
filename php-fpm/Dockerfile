FROM profideo/php-5.4.45-fpm

RUN apt-get update --fix-missing

RUN /usr/local/bin/docker-php-ext-install mysqli && /usr/local/bin/docker-php-ext-enable mysqli

RUN pecl install apcu-4.0.11 && echo extension=apcu.so > /usr/local/etc/php/conf.d/docker-php-ext-apcu.ini

RUN apt-get install libxml2-dev

RUN /usr/local/bin/docker-php-ext-install soap && /usr/local/bin/docker-php-ext-enable soap


