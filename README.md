# symfony-template

## development

### build all containers

```bash
docker-compose up -d --build
```

### enter to a docker php container
```bash
docker-compose exec php bash
```

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
```bash
composer require lexik/jwt-authentication-bundle
```
```bash
composer require symfony/validator
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

```bash
composer update
```

### Migrations

#### create an entity

```bash
php bin/console make:entity
```

#### Create a brand new migration

```bash
php bin/console make:migration
```

#### Apply migrations

```bash
php bin/console doctrine:migrations:migrate
```


