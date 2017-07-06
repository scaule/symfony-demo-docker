FROM debian:jessie

RUN apt-get update && apt-get install -y nginx

ADD nginx.conf /etc/nginx/

ADD nginx-default.conf /etc/nginx/sites-available/
ADD ssl-nginx-default.conf /etc/nginx/sites-available/

ADD foncia.crt /etc/nginx/
ADD foncia.key /etc/nginx/

RUN ln -s /etc/nginx/sites-available/nginx-default.conf /etc/nginx/sites-enabled/nginx-default.conf
RUN rm /etc/nginx/sites-enabled/default

RUN apt-get install libxml2-dev
RUN /usr/local/bin/docker-php-ext-install mysqli
RUN /usr/local/bin/docker-php-ext-enable mysqli
RUN /usr/local/bin/docker-php-ext-install soap
RUN /usr/local/bin/docker-php-ext-enable soap
RUN pecl install apcu-4.0.11 && echo extension=apcu.so > /usr/local/etc/php/conf.d/docker-php-ext-apcu.ini
RUN apt-get install default-jre

RUN echo "upstream php-upstream { server php:9000; }" > /etc/nginx/conf.d/upstream.conf

RUN usermod -u 1000 www-data

CMD ["nginx"]

EXPOSE 80
EXPOSE 443
