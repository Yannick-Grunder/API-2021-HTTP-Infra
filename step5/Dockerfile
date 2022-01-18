FROM php:8-apache

COPY setup.sh /usr/local/bin/

COPY templates /var/apache2/templates
COPY conf/ /etc/apache2

RUN a2enmod proxy proxy_http
RUN a2ensite 000-* 001-*
CMD /usr/local/bin/setup.sh && docker-php-entrypoint apache2-foreground
