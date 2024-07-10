## Run

```sh
git clone git@github.com:sanchescom/currency-exchange.git

cd ./currency-exchange

composer install

cp .env.example .env

./vendor/bin/sail up -d

./vendor/bin/sail artisan migrate --seed --seeder=DatabaseSeeder
```

## API methods

### Token issue
```sh
curl --location 'localhost/api/v1/tokens/create' \
--header 'Content-Type: application/json' \
--header 'Accept: application/json' \
--data-raw '{
"email": "test@example.com",
"password": "password"
}'
```

### Get rates
```sh
curl --location 'localhost/api/v1/rates?currency=USD' \
--header 'Content-Type: application/json' \
--header 'Accept: application/json' \
--header 'Authorization: ••••••'
```

### Exchange fiat
```sh
curl --location 'localhost/api/v1/convert' \
--header 'Content-Type: application/json' \
--header 'Accept: application/json' \
--header 'Authorization: Bearer 6|vGDZt9usv7VpU2e8fyF64hJnppVjwCjTBqgF2sKA642e3ef0' \
--data '{
"currency_from": "USD",
"currency_to": "BTC",
"value": 10
}'
```

### Exchange coins
```sh
curl --location 'localhost/api/v1/convert' \
--header 'Content-Type: application/json' \
--header 'Accept: application/json' \
--header 'Authorization: Bearer 6|vGDZt9usv7VpU2e8fyF64hJnppVjwCjTBqgF2sKA642e3ef0' \
--data '{
"currency_from": "BTC",
"currency_to": "USD",
"value": 0.1
}'
```
## Postman collection

```sh
cat ./postman_collection.json
```
