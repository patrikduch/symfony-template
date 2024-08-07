# symfony-template

## development

```bash
docker-compose up -d --build
```

docker-compose exec php bash



### Required dependencies

```bash
composer require symfony/orm-pack
```

```bash
composer require doctrine/orm
```

```bash
composer require symfony/maker-bundle --dev
```


Unit tests
composer require --dev symfony/phpunit-bridge


### Composer
composer update



### create an entity

php bin/console make:entity


### Migrations

php bin/console make:migration
php bin/console doctrine:migrations:migrate


