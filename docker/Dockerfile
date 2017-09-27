FROM jaschweder/php:5.6-tools

RUN apt-get update -y \
    && apt-get install \
    ssh \
    -y

RUN cd /usr/src \
	&& git clone -b xdebug_2_4 --depth 1 https://github.com/xdebug/xdebug \
	&& cd xdebug \
	&& phpize \
	&& ./configure \
	&& make \
	&& make install \
	&& rm -rf /usr/src/xdebug \
	&& echo "zend_extension=xdebug.so" >> /usr/local/lib/php.ini

RUN rm -rf /var/lib/apt/lists/* \
    && apt-get autoremove \
    && apt-get autoclean

CMD ["./vendor/bin/phpunit"]
