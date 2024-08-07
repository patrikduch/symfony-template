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

### Unit tests
```bash
composer require --dev symfony/phpunit-bridge
```

#### Running tests

```bash
./bin/phpunit
```


### Composer
composer update



### create an entity

php bin/console make:entity


### Migrations

#### Create a brand new migration

```bash
php bin/console make:migration
```


php bin/console doctrine:migrations:migrate


