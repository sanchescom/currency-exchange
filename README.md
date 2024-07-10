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

## SQL Solution

## SQL Query
```sql
SELECT h.name,
       h.author,
       GROUP_CONCAT(h.book_name) AS books
FROM
    (
        SELECT CONCAT_WS(' ', u.first_name, u.last_name) AS name,
               TIMESTAMPDIFF(YEAR, u.birthday, CURDATE()) AS age,
               FLOOR(DATEDIFF(ub.return_date, ub.get_date) / 7) AS week_diff,
               b.name AS book_name,
               b.author,
               ub.get_date,
               ub.return_date
        FROM users u
                 LEFT JOIN user_books ub
                           ON u.id = ub.user_id
                 LEFT JOIN books b
                           ON ub.book_id = b.id
    ) h
WHERE h.age
    BETWEEN 7 AND 17
  AND h.week_diff <= 2
GROUP BY h.name,
         h.author
HAVING COUNT(h.author) = 2
```
## Tables with data
```sh
cd ./currency-exchange/sql
```
