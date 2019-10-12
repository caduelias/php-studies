FROM php:7.3.9-apache 

RUN apt-get -y update
RUN a2enmod rewrite

#Drivers mysql
RUN docker-php-ext-install pdo_mysql 

RUN docker-php-ext-install mysqli