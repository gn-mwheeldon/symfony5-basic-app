DOCKER_CONTAINER_RAW = $(shell docker ps -aqf name=symfony5_php)
DOCKER_CONTAINER = $(strip ${DOCKER_CONTAINER_RAW})

DOCKER_COMMAND_PREFIX = docker exec -it -w /var/www ${DOCKER_CONTAINER}

dev-ci:
	@${DOCKER_COMMAND_PREFIX} composer install -n

dev-sh:
	@${DOCKER_COMMAND_PREFIX} bash

dev-run:
	@docker-compose up -d

dev-stop:
	@docker-compose down
