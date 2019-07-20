# influence4you
## Install process:
- Clone the project
- Build containers `docker-compose build`
- Up containers `docker-compose up -d`
- Install dependency `docker-compose exec app composer install`
- Create `.env` file `docker-compose exec app cp .env.example .env` and config it
- Generate new key `docker-compose exec app php artisan key:generate`
- Start db migrations `docker-compose exec app php artisan migrate:refresh --seed`

## Test user for database
email: `test@test.com`
pass: `password`
