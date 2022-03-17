#-include docker/.env

.SILENT: shell lint fixer analyse
.DEFAULT_GOAL := help

help:
	@grep -E '(^[a-zA-Z_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'

##
## Project
##---------------------------------------------------------------------------

install: ## Install the project
install: hooks
	cd ./docker && ./install.sh

start: ## Start the project
start: hooks
	cd ./docker && ./start.sh

stop: ## Stop the project
stop:
	cd ./docker && ./stop.sh

restart: ## Restart the project
restart: stop start

hooks:
	# Pre commit
	echo "#!/bin/bash" > .git/hooks/pre-commit
	echo "make check" >> .git/hooks/pre-commit
	chmod +x .git/hooks/pre-commit
	# Git pull
	echo "#!/bin/bash" > .git/hooks/post-merge
	echo "make post-merge" >> .git/hooks/post-merge
	chmod +x .git/hooks/post-merge

post-merge: composer
	cd ./docker/ && docker-compose exec -T php make doctrine-migrations

composer:
	cd ./docker && docker-compose exec -T php bash -c "composer install"

shell: ## Connect to PHP container
shell:
	cd ./docker && docker-compose exec php bash

##
## Code quality (only on PHP container)
##---------------------------------------------------------------------------

check:
	cd ./docker/ && docker-compose exec -T php make lint
	cd ./docker/ && docker-compose exec -T php make analyse
	cd ./docker/ && docker-compose exec -T php make security

lint: ## Execute PHPCS
lint:
	$(DISABLE_XDEBUG) vendor/bin/phpcs -p

fixer: ## Execute PHPCS fixer
fixer:
	$(DISABLE_XDEBUG) ./vendor/bin/phpcbf -p

analyse: ## Execute PHPStan
analyse:
	vendor/bin/phpstan analyse --memory-limit=4G

security: ## Check CVE for vendor dependencies
security:
	./bin/security-checker --path=./composer.lock
