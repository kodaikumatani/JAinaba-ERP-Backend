up:
	./vendor/bin/sail up -d
composer:
	./vendor/bin/sail composer update
stan:
	./vendor/bin/phpstan analyse -c phpstan.neon
phpcs:
	./vendor/bin/phpcs .
phpcbf:
	./vendor/bin/phpcbf .
