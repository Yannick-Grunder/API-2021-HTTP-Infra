FROM php:8-apache
COPY conf/ /etc/apache2
RUN a2enmod proxy proxy_http && a2ensite 000-* 001-* && apt-get update && apt-get install -y vim