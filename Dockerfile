FROM php:7.2-cli

ENV VERSION 1.0

RUN yes | pecl install xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=off" >> /usr/local/etc/php/conf.d/xdebug.ini
RUN cp /usr/local/lib/php/build/run-tests.php /usr/local/bin/run-tests.php
RUN chmod 755 /usr/local/bin/run-tests.php
ENV TEST_PHP_EXECUTABLE /usr/local/bin/php
