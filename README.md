# symfony-template

## development

```bash
docker-compose up -d --build
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


### Composer
composer update



### create an entity

php bin/console make:entity


### Migrations

php bin/console make:migration
php bin/console doctrine:migrations:migrate


