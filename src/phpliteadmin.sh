#!/usr/bin/env bash

rm -r phpliteadmin
docker rm -f myphpliteadmin
docker rmi phpliteadmin
git clone https://github.com/mrespin/phpliteadmin.git
cd phpliteadmin
docker build -t phpliteadmin .
docker run -d -p 8080:80 -v test2:/db --name myphpliteadmin phpliteadmin
