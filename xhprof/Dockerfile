FROM php:7.4-apache

RUN apt -y update
RUN apt install -y \
    git \
    graphviz

WORKDIR /var/www/html/
RUN git clone https://github.com/sters/xhprof-html.git .