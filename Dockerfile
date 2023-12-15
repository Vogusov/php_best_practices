FROM php:8.2-cli
#RUN docker-php-ext-install mbstring

WORKDIR /usr/src/app
EXPOSE 8111
COPY ./ /usr/src/app

CMD ["php", "-v"]
CMD ["php", "-S", "0.0.0.0:80", "-t", "/usr/src/app"]
#CMD ["php", "/usr/src/app/src/index.php"]