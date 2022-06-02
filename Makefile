.env:
	cp .env.example .env
	ln -s '$(shell pwd)/.env' '$(shell pwd)/docker/.env'

init:
	make docker-run command="build --no-cache"
	make docker-run command="up -d"
	make docker-exec-as-me command="composer install"

php:
	make docker-exec-as-me command="bash"

up:
	make docker-run command="up -d"

down:
	make docker-run command="down"

docker-run:
	docker-compose -f docker/docker-compose.yaml $(command)

docker-exec-as-root:
	make docker-run command="exec php $(command)"

docker-exec-as-me:
	make docker-run command="exec -u $(shell id -u):$(shell id -g) php $(command)"

rebuild:
	make docker-run command="build --no-cache"
	make down && make up
