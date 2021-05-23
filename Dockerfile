FROM php:7.4-cli
COPY . /usr/src/phpliteadmin
WORKDIR /usr/src/phpliteadmin
CMD [ "php", "./phpliteadmin.php" ]
