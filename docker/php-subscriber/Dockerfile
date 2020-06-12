FROM php:cli-alpine3.12

WORKDIR /var/www

RUN rm -Rf /var/www/html

ADD . /var/www

RUN wget https://raw.githubusercontent.com/composer/getcomposer.org/76a7060ccb93902cd7576b67264ad91c8a2700e2/web/installer -O - -q | php -- --quiet

RUN php composer.phar install

ENTRYPOINT ["sh", "/var/www/docker/php-subscriber/entrypoint.sh"]
