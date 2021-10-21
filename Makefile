#!make

SHELL = /bin/bash

current_dir = $(shell pwd)

all: up

up:
	sed -e '/auto\_prepend/ s/^#*/#/' -i sites/eshop.conf
	docker-compose up -d

up-cov:
	sed -e '/auto\_prepend/ s/#*//' -i sites/eshop.conf
	docker-compose up -d

down:
	docker-compose down --remove-orphans -v

restart:
	docker-compose restart

stop:
	docker-compose stop

build-agg:
	$(if $(findstring exists,$(shell docker image inspect philae_eshop_phpagg --format=exists 2> /dev/null)), @echo phpcli image exists, @docker build -t philae_eshop_phpagg phpcli-img/.)

delete-agg:
	docker images | grep -i philae_eshop_phpagg | awk '{print $3}' | xargs docker rmi

rebuild-agg: delete-agg rebuild-agg

run-agg:
	docker container run --rm -v $(current_dir)/www/html:/var/www/html -v $(current_dir)/php-img/docker-php-ext-xdebug.ini:/usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini -w /var/www/html/opencart/codecoverage philae_eshop_phpagg php combine.php

clean:
	rm -f www/codecoverage/coverages/*.json

agg-cov: build-agg run-agg clean

