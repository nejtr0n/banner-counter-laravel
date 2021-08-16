.PHONY: install
install:
	@docker-compose exec php composer install

.PHONY: migrate
migrate:
	@docker-compose exec php php artisan migrate

.PHONY: seed
seed:
	@docker-compose exec php php artisan db:seed

.PHONY: dev-up
dev-up: migrate seed

