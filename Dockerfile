FROM php:7.4-cli
COPY src/ /usr/src/phpliteadmin
WORKDIR /usr/src/phpliteadmin
CMD [ "php", "./phpliteadmin.php" ]
