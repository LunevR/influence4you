# influence4you
## Install process:
- Clone the project
- Build containers `docker-compose build`
- Up containers `docker-compose up -d`
- Install dependency `docker-compose exec app composer install`
- Create `.env` file `docker-compose exec app cp .env.example .env` and config it
- Generate new key `docker-compose exec app php artisan key:generate`
- Create databases:
    - Enter to database in container `docker-compose exec db mysql -u root -p`
    - Enter password (in base case is `secret`)
    - Create database for app `CREATE DATABASE influence4you;`
    - Create database for tests `CREATE DATABASE influence4you_test;`
    - Exit by `exit`
- Start db migrations `docker-compose exec app php artisan migrate:refresh --seed`
- Open application by `0.0.0.0:8080`

## Test user for database
email: `test@test.com`
pass: `password`

## Start testing
For starting tests use `docker-compose exec app composer test`
