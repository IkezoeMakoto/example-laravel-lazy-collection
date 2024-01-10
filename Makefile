all: setup exampleGenerator measureCollection measureLazyCollection

setup:
	-docker-compose run --rm php composer install
.PHONY: setup

exampleGenerator:
	-docker-compose run --rm php php exampleGenerator.php
.PHONY: exampleGenerator

measureLazyCollection:
	-docker-compose run --rm php php artisan measure:lazy-collection 1000
	-docker-compose run --rm php php artisan measure:lazy-collection 10000
	-docker-compose run --rm php php artisan measure:lazy-collection 100000
	-docker-compose run --rm php php artisan measure:lazy-collection 1000000
.PHONY: measureLazyCollection

measureCollection:
	-docker-compose run --rm php php artisan measure:collection 1000
	-docker-compose run --rm php php artisan measure:collection 10000
	-docker-compose run --rm php php artisan measure:collection 100000
	-docker-compose run --rm php php artisan measure:collection 1000000
.PHONY: measureCollection
